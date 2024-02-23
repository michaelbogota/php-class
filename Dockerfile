FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY . /app

WORKDIR /app

RUN pwd
RUN ls ./app

CMD ["php", "-S", "0.0.0.0:10000", "./app/index.php"]
