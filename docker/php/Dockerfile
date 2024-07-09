# docker/php/Dockerfile

FROM php:7.4-fpm

# Instalar extensões necessárias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    libzip-dev \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:1.10.7 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar arquivos do projeto
COPY . /var/www

# Instalar dependências do projeto
RUN composer install

# Ajustar permissões
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
