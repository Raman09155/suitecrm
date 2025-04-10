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
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy all application files
COPY . .

# Install PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Adjust Apache config to serve from SuiteCRM 8's public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Fix permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose default HTTP port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
