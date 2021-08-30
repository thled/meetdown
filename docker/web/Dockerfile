FROM nginx:1.21-alpine as base

WORKDIR /app

FROM base as dev

COPY docker/web/default_dev.conf /etc/nginx/conf.d/default.conf

FROM base as prod

# configure nginx
COPY docker/web/default_prod.conf /etc/nginx/conf.d/default.conf

# add assets
COPY app/public/ .

