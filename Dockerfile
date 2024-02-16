FROM php:8.2-fpm-alpine

RUN curl -o ./install-php-extensions https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions
RUN --chmod=0755 ./install-php-extensions

# Instalar dependencias para PHP
RUN apk add --no-cache \
    curl \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib

# Instalar extensiones de MySQL y PostgreSQL
RUN ./install-php-extensions -O \
    pdo_mysql \
    mysqli \
    pdo_pgsql

COPY . /app

WORKDIR /app

RUN pwd

CMD ["php", "-S", "0.0.0.0:10000", "./app/index.php"]
