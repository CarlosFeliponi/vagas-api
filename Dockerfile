FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libonig-dev \
    netcat-openbsd \	
    && docker-php-ext-install pdo_mysql mbstring gd

COPY . /var/www

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

# Copiar o script de entrada e dar permissão de execução
COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Usar o script como entrypoint
ENTRYPOINT ["/entrypoint.sh"]
