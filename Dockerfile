# Use PHP 8.1 with Apache
FROM php:8.1-apache

# Install required packages and extensions
RUN apt-get update && apt-get install -y \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    libzip-dev \
    libicu-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libmariadb-dev \
    libmagickwand-dev --no-install-recommends

# Enable PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip intl gd soap mysqli opcache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy all project files into the container
COPY . /var/www/html/

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose web server port
EXPOSE 80
