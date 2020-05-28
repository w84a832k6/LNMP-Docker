FROM php:7.3-fpm

COPY config/php.ini /usr/local/etc/php

ENV PHPREDIS_VERSION 5.0.2

RUN cd ~ \
    && useradd -s /bin/bash git \
    && apt-get update \
    && apt-get install -y wget vim git \
    && wget https://github.com/phpredis/phpredis/archive/$PHPREDIS_VERSION.tar.gz \
    && tar -zxvf $PHPREDIS_VERSION.tar.gz \
    && mkdir -p /usr/src/php/ext \
    && mv phpredis-$PHPREDIS_VERSION /usr/src/php/ext/redis \
    && docker-php-ext-install redis \
    && docker-php-ext-install pdo_mysql mysqli\
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer \
    && echo "alias ls='ls'\nalias ll='ls -l'\nalias la='ls -lA'" >> ~/.bashrc \
