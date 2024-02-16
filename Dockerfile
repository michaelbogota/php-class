FROM php:8.2-fpm-alpine

# Instalar dependencias para PHP
RUN apk add --no-cache \
    curl \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib

# Instalar extensiones de MySQL y PostgreSQL
RUN docker-php-ext-install -O \
    pdo_mysql \
    mysqli \
    pdo_pgsql

COPY . /app

WORKDIR /app

RUN pwd

CMD ["php", "-S", "0.0.0.0:10000", "./app/index.php"]
