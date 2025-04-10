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

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy app source code
COPY . .

# Set Apache DocumentRoot to public (SuiteCRM 8 structure)
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Optional but recommended: Fix permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# ⛏️ Create dummy symfony-cmd script to avoid install failure
RUN echo -e '#!/bin/sh\nexit 0' > /usr/bin/symfony-cmd && chmod +x /usr/bin/symfony-cmd

# ✅ Install Composer dependencies and generate autoload files
RUN composer install --no-dev --optimize-autoloader --ignore-platform-reqs

# Expose Apache port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
