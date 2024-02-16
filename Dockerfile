FROM php:8.2-fpm-alpine

RUN curl -sSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - | sh -s \
      pdo_pgsql

RUN apk add --no-cache \
    curl \
    git \
    libzip \
    libjpeg-turbo \
    libpng \
    libxml2 \
    zlib \

COPY . /app

WORKDIR /app

RUN pwd

CMD ["php", "-S", "0.0.0.0:10000", "./app/index.php"]
