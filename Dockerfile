FROM php:8-fpm-alpine

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

CMD ["php", "-S", "0.0.0.0:80"]
