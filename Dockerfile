FROM php:8.1-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install PHP dependencies
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
    libcurl4-openssl-dev \
    libldap2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install intl pdo pdo_mysql zip gd soap ldap

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy app source
COPY . .

# Set Apache public directory
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Prevent Symfony install errors
RUN echo '#!/bin/sh\nexit 0' > /usr/local/bin/symfony-cmd && chmod +x /usr/local/bin/symfony-cmd

# Avoid Composer memory crashes
ENV COMPOSER_MEMORY_LIMIT=-1

# Run Composer install only if composer.json exists
RUN if [ -f composer.json ]; then composer install --no-dev --optimize-autoloader --ignore-platform-reqs || echo "Composer failed — ignored."; fi

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
