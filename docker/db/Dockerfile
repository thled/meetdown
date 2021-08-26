FROM mariadb:10.6 as base

FROM base as dev

COPY my_dev.cnf /etc/mysql/my.cnf

FROM base as prod

COPY my_prod.cnf /etc/mysql/my.cnf

