FROM php:8.2-fpm-alpine

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Instalar dependencias para PHP
RUN apk add --no-cache \
    curl \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib

# Instalar extensiones de MySQL y PostgreSQL
RUN install-php-extensions -O \
    pdo_mysql \
    mysqli \
    pdo_pgsql

COPY . /app

WORKDIR /app

RUN pwd

CMD ["php", "-S", "0.0.0.0:10000", "./app/index.php"]
