# Use official PHP with Apache image
FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install system dependencies and PHP extensions
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

# Install Composer from the Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application code to container
COPY . /var/www/html

# Install PHP dependencies via Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist --no-scripts --ignore-platform-reqs



# Set permissions (optional but recommended)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Apache port
EXPOSE 80
