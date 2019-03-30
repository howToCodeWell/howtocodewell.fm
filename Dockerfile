########################################################################################################################
# WEB SERVER BASE
# Includes the base packages for all webservers.
# Should not include build tools
# Should be the base image for PRODUCTION
########################################################################################################################
FROM php:7.2.14-apache-stretch as webserver-base
RUN apt-get update \
    && apt-get install -y apt-utils libxml2-dev zlib1g-dev libicu-dev build-essential gnupg  \
    && docker-php-ext-configure opcache \
    && docker-php-ext-install opcache \
    && docker-php-ext-enable opcache \
    && a2enmod rewrite headers
########################################################################################################################
# BUILDER BASE
# Should include build and testing tools
# Should NOT be the base image for production
# Should be the base image for dev and test
########################################################################################################################
FROM webserver-base as builder-base

RUN apt-get update \
    && apt-get install -y libzip-dev unzip zip git \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip \
    && pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

########################################################################################################################
# DEV ENV
# Builds application for local development
########################################################################################################################
FROM builder-base as dev-env
COPY . /var/www/html

########################################################################################################################
# TEST ENV
# Builds application for local development
# Includes Dev/Test packages
########################################################################################################################
FROM dev-env as test-env
RUN php /usr/local/bin/composer install

########################################################################################################################
# PROD Builder
# Doesn't include testing tools (XDebug)
# Removes Dev/Test packages
# Optimises autoloaders
# Set Prod ENV
########################################################################################################################
FROM test-env as prod-builder
RUN php /usr/local/bin/composer install -o --no-dev
RUN bin/sculpin generate --env=prod
########################################################################################################################
# PROD ENV
# Clean image (No build tools)
########################################################################################################################
FROM webserver-base as prod-env
COPY --from=prod-builder /var/www/html /var/www/html
