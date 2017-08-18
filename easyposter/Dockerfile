FROM "alpine:edge"
MAINTAINER jay.chinthrajah@mmlafleur.com

# Environments
ENV TIMEZONE            America/New_York
ENV PHP_MEMORY_LIMIT    512M
ENV MAX_UPLOAD          50M
ENV PHP_MAX_FILE_UPLOAD 200
ENV PHP_MAX_POST        100M

RUN apk update && apk upgrade
RUN apk add curl
RUN apk add openssl
RUN apk add php5
RUN apk add php5-openssl
RUN apk add php5-fpm
RUN apk add php5-cli
RUN apk add php5-mysql
RUN apk add php5-pgsql
RUN apk add php5-sqlite3
# RUN apk add php5-apcu
RUN apk add php5-intl
RUN apk add php5-mcrypt
RUN apk add php5-json
RUN apk add php5-gd
RUN apk add php5-curl
RUN apk add bash

WORKDIR /var/easyposter/easyposter
