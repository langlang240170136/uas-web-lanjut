FROM php:8.2-apache

# Install ekstensi PHP & MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable mod_rewrite Apache buat Laravel
RUN a2enmod rewrite

# Copy semua file ke server
COPY . /var/www/html

# Set working directory & permission
WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Ubah DocumentRoot Apache ke folder /public milik Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf