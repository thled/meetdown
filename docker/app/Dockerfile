FROM alpine:3.14 as builder

WORKDIR /tools

RUN \
    # install watcher
    wget --output-document watcher.tar.xz \
    https://github.com/watchexec/watchexec/releases/download/cli-v1.17.1/watchexec-1.17.1-x86_64-unknown-linux-musl.tar.xz \
    && tar xf watcher.tar.xz

FROM php:8.0-fpm-alpine3.14 as base

# install utilities
RUN apk add --no-cache \
    # install php extensions
    && docker-php-ext-install opcache pdo_mysql

# create user
RUN adduser -D -g '' phpuser
USER phpuser

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

FROM base as dev

# configure php
COPY docker/app/php_dev.ini /usr/local/etc/php/php.ini

# install watchexec
COPY --from=builder /tools/watchexec-1.17.1-x86_64-unknown-linux-musl/watchexec /usr/bin/

# install tools from composer
ENV PATH="/home/phpuser/.composer/vendor/bin:${PATH}"
RUN composer global require \
    # format
    friendsofphp/php-cs-fixer \
    # static analyses
    phpstan/phpstan \
    phpstan/extension-installer \
    phpstan/phpstan-strict-rules \
    phpstan/phpstan-phpunit \
    phpstan/phpstan-deprecation-rules \
    ergebnis/phpstan-rules \
    thecodingmachine/phpstan-strict-rules \
    qossmic/deptrac-shim

# set aliases
ENV ENV="/home/phpuser/.profile"
RUN echo 'echo -e "Welcome! The following aliases exist:\n \
run_lint (rl): Lint the code without changing it.\n \
run_fmt (rf): Format the code by the linting rules.\n \
run_analyse (ra): Analyse the code statically.\n \
run_test (rt): Run all tests.\n \
run_watch (rw): Watch unit tests.\n \
run_ci (rc): Run pipeline steps."' >> ~/.profile \
    && echo 'alias run_lint="php-cs-fixer fix --allow-risky=yes -vvv --dry-run"' >> ~/.profile \
    && echo 'alias rl=run_lint' >> ~/.profile \
    && echo 'alias run_fmt="php-cs-fixer fix --allow-risky=yes"' >> ~/.profile \
    && echo 'alias rf=run_fmt' >> ~/.profile \
    && echo 'run_analyse() { \
        echo "DEPTRAC:"; deptrac --fail-on-uncovered; echo "PHPSTAN:"; phpstan; \
        }' >> ~/.profile \
    && echo 'alias ra=run_analyse' >> ~/.profile \
    && echo 'alias run_test="/app/vendor/bin/pest"' >> ~/.profile \
    && echo 'alias rt=run_test' >> ~/.profile \
    && echo 'alias run_watch="watchexec -c \
        -w /app/src \
        -w /app/tests \
        \"phpstan && \
        /app/vendor/bin/pest --testsuite=unit\""' >> ~/.profile \
    && echo 'alias rw=run_watch' >> ~/.profile \
    && echo 'run_ci() { run_lint; run_analyse; run_test; }' >> ~/.profile \
    && echo 'alias rc=run_ci' >> ~/.profile

FROM base as prod

# set prod env vars
ENV APP_ENV=prod
ENV DATABASE_URL="mysql://db_user:db_pass@db_pod:3306/db?serverVersion=10.6"

# configure php
COPY docker/app/php_prod.ini /usr/local/etc/php/php.ini

# install dependencies (separate copy step for caching)
COPY --chown=phpuser app/composer.json app/composer.lock app/symfony.lock ./
RUN composer install --no-dev --prefer-dist --no-progress --no-interaction --no-scripts

# add application code
COPY --chown=phpuser app/ .

