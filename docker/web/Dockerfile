FROM nginx:1.21-alpine as base

FROM base as dev

COPY default_dev.conf /etc/nginx/conf.d/default.conf

FROM base as prod

COPY default_prod.conf /etc/nginx/conf.d/default.conf

