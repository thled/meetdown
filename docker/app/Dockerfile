FROM alpine:3.14 as builder

RUN apk add --no-cache \
    file git autoconf automake libtool gettext gettext-dev make g++ texinfo curl

WORKDIR /tools
RUN \
    # build fswatch
    wget https://github.com/emcrisostomo/fswatch/releases/download/1.16.0/fswatch-1.16.0.tar.gz
    RUN tar xvf fswatch-1.16.0.tar.gz 
    RUN cd fswatch-1.16.0 && ./configure && make && make install

FROM php:8.0-fpm-alpine3.14 as base

# install utilities
RUN apk add --no-cache \
    # install php extensions
    && docker-php-ext-install opcache pdo_mysql

# create user
RUN adduser -D -g '' phpuser
USER phpuser

# install composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /app

FROM base as dev

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
    thecodingmachine/phpstan-safe-rule \
    vimeo/psalm \
    qossmic/deptrac-shim

# install fswatch for pest watcher
COPY --from=builder /usr/local/bin/fswatch /usr/local/bin/fswatch
COPY --from=builder /usr/local/lib/libfswatch.so.11 /usr/local/lib/libfswatch.so.11
COPY --from=builder /usr/lib/libintl.so.8 /usr/lib/libintl.so.8
COPY --from=builder /usr/lib/libstdc++.so.6 /usr/lib/libstdc++.so.6
COPY --from=builder /usr/lib/libgcc_s.so.1 /usr/lib/libgcc_s.so.1

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
        echo "DEPTRAC:"; deptrac --fail-on-uncovered; echo "PSALM:"; psalm; echo "PHPSTAN:"; phpstan analyse; \
        }' >> ~/.profile \
    && echo 'alias ra=run_analyse' >> ~/.profile \
    && echo 'alias run_test="/app/vendor/bin/pest"' >> ~/.profile \
    && echo 'alias rt=run_test' >> ~/.profile \
    && echo 'alias run_watch="/app/vendor/bin/pest --watch --testsuite=unit"' >> ~/.profile \
    && echo 'alias rw=run_watch' >> ~/.profile \
    && echo 'run_ci() { run_lint; run_analyse; run_test; }' >> ~/.profile \
    && echo 'alias rc=run_ci' >> ~/.profile

FROM base as prod

ENV APP_ENV=prod
ENV DATABASE_URL="mysql://db_user:db_pass@db_pod:3306/db?serverVersion=10.6"

COPY app/ .

RUN composer install --no-dev --prefer-dist --no-progress --no-suggest --no-interaction

