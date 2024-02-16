FROM php:8.2-fpm-alpine

ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN install-php-extensions pdo_mysql mysqli pdo_pgsql

RUN apk add --no-cache \
    curl \
    git \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib

COPY . /app

WORKDIR /app

CMD ["php", "-S", "0.0.0.0:10000", "index.php"]
