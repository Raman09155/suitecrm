FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install system and PHP dependencies
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

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy source code
COPY . .

# Update Apache DocumentRoot to use the public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Fix permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Dummy symfony-cmd to prevent post-install script failures
RUN echo '#!/bin/sh\nexit 0' > /usr/local/bin/symfony-cmd && chmod +x /usr/local/bin/symfony-cmd

# Disable Composer scripts (to avoid failures), ignore platform reqs if needed
ENV COMPOSER_MEMORY_LIMIT=-1

RUN composer install --no-dev --optimize-autoloader --no-scripts || true

# Expose HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]

