FROM php:8.5-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev \
    pkg-config \
    libbz2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libpq-dev \
    vim && \
    docker-php-ext-configure intl && \
    docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    bcmath \
    intl \
    zip \
    gd

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
