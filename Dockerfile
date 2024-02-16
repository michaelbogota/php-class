FROM php:8-fpm-alpine

RUN apk add --no-cache \
    curl \
    git \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib

RUN docker-php-ext-install -O \
    pdo_mysql \
    mysqli \
    pdo_pgsql

COPY . /app

WORKDIR /app

CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
