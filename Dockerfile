# Webserver Base
FROM php:8.0.11-apache-buster as webserver-base

LABEL maintainer="Peter Fisher"

ARG XDEBUG_MODE="off"
ARG APP_ENV=dev
ENV APP_ENV=$APP_ENV
ARG DEBIAN_FRONTEND=noninteractive
ENV APACHE_DOCUMENT_ROOT="/var/www/html/public"
RUN apt-get update --fix-missing \
    && apt-get install -y --no-install-recommends mariadb-client zlib1g-dev libcurl3-dev libssl-dev libicu-dev g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql intl \
    && a2enmod rewrite \
    && a2enmod headers

RUN pecl install redis raphf \
    && docker-php-ext-enable redis raphf

RUN pecl install pecl_http

RUN apt-get clean autoclean \
    && apt-get autoremove --yes \
    && rm -rf /var/lib/{apt,dpkg,cache,log}/

FROM webserver-base as dev-builder
RUN apt-get install -y --no-install-recommends  \
    zip unzip libzip-dev curl \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN pecl install xdebug-3.0.0 && docker-php-ext-enable xdebug http

FROM howtocodewell/composer:php-8 as composer
WORKDIR /var/www/html

COPY composer.json .
COPY composer.lock .

RUN composer install --no-dev --optimize-autoloader --no-scripts

FROM dev-builder as webserver-dev
COPY --from=composer /usr/bin/composer /usr/bin/composer
COPY --chown=www-data:www-data --from=composer /var/www/html/vendor /var/www/html/vendor
COPY --chown=www-data:www-data  . .
COPY ./infra/docker/${APP_ENV}/apache/config/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY ./infra/docker/${APP_ENV}/php/config/php.ini /usr/local/etc/php/php.ini
COPY ./infra/docker/${APP_ENV}/apache/scripts/docker-entrypoint.sh /

RUN mkdir -p var/log \
    && mkdir -p var/cache \
    && chown www-data:www-data -Rf var/log \
    && chown www-data:www-data -Rf var/cache \
    && chmod +x /docker-entrypoint.sh

EXPOSE 80 443

ENTRYPOINT ["/docker-entrypoint.sh"]
