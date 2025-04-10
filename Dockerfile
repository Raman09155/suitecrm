FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install PHP and system dependencies
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
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap ldap

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Update Apache to use public folder as root
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Optional but recommended permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Install PHP dependencies with Composer
RUN composer install --no-dev --optimize-autoloader --no-scripts --ignore-platform-reqs

# Expose HTTP port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
