FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install required system and PHP dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    zip \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libssl-dev \
    libmcrypt-dev \
    libcurl4-openssl-dev \
    libldap2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap ldap

# Install Composer from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application source code
COPY . .

# Update Apache DocumentRoot to point to the 'public' folder (SuiteCRM 8 structure)
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Optional: Fix file permissions (recommended)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set Git safe directory for the problematic package to avoid "dubious ownership" errors
RUN git config --global --add safe.directory /var/www/html/vendor/zozlak/rdf-constants

# Install Composer dependencies (allowing platform requirements to be ignored)
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Expose Apache's default HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
