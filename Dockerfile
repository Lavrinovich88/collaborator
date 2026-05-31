FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    bash \
    coreutils \
    libpng-dev \
    libzip-dev \
    zip \
    $PHPIZE_DEPS

RUN docker-php-ext-install pdo pdo_mysql zip bcmath opcache

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app