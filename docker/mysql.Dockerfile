FROM mysql

COPY docker/mysql/dump.sql /docker-entrypoint-initdb.d/
#ADD docker/mysql/dump.sql /docker-entrypoint-initdb.d