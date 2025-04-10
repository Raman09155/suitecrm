FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install dependencies
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
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy app code
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Install dependencies via Composer
RUN composer install --no-dev --optimize-autoloader

# Permissions (optional, but useful)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
