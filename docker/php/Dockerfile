ARG PHP_VERSION
FROM php:${PHP_VERSION}-fpm

ARG PSR_VERSION
ARG PHALCON_VERSION

RUN apt update && apt install -y zip unzip

# Easy installation of PHP extensions in official PHP Docker images
# @see https://github.com/mlocati/docker-php-extension-installer
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# Install PHP extensions
RUN install-php-extensions xdebug pdo_mysql zip

# Add logs error for php-fpm
RUN echo "error_log = /var/log/php/error.log" >> /usr/local/etc/php/php.ini \
  && echo "log_errors = On" >> /usr/local/etc/php/php.ini

RUN mkdir -p /var/log/php \
  && touch /var/log/php/error.log \
  && chown www-data:www-data /var/log/php

# Install psr
RUN cd /tmp \
    && curl -LO https://github.com/jbboehr/php-psr/archive/v${PSR_VERSION}.tar.gz \
    && tar xzf /tmp/v${PSR_VERSION}.tar.gz \
    && docker-php-ext-install -j $(getconf _NPROCESSORS_ONLN) /tmp/php-psr-${PSR_VERSION} \
    && rm -r /tmp/v${PSR_VERSION}.tar.gz /tmp/php-psr-${PSR_VERSION}

# Install phalcon
RUN cd /tmp \
    && curl -LO https://github.com/phalcon/cphalcon/archive/refs/tags/v${PHALCON_VERSION}.tar.gz \
    && tar xzf /tmp/v${PHALCON_VERSION}.tar.gz \
    && cd /tmp/cphalcon-${PHALCON_VERSION}/build \
    && ./install \
    && docker-php-ext-enable phalcon \
    && rm -r /tmp/v${PHALCON_VERSION}.tar.gz /tmp/cphalcon-${PHALCON_VERSION}

# Import fpm config file
COPY docker/php/www.conf /etc/php/${PHP_VERSION}/fpm/pool.d/www.conf

# Import composer and run dump
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
COPY composer.lock composer.json /var/www/html/
RUN composer dump-autoload

# Start fpm service
CMD ["php-fpm","-F"]
