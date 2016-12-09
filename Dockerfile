## pull base image
FROM alpine:3.3

## copy modified PHP files into container
COPY . /pimf-vanilla

## set working directory
WORKDIR /pimf-vanilla

# get packages
RUN apk update && \
    apk upgrade && \
    apk add tzdata && \
    apk add php-fpm && \
    apk add php-common && \
    apk add php-bcmath && \
    apk add php-ctype && \
    apk add php-curl && \
    apk add php-dom && \
    apk add php-json && \
    apk add php-openssl && \
    apk add php-pdo && \
    apk add php-pdo_sqlite && \
    apk add php-pdo_mysql && \
    apk add php-cli && \
    apk add php-phar && \
    apk add php-pcntl && \
    apk add php-intl && \
    apk add openssh && \
    apk add openssl && \
    apk add supervisor && \
    apk del tzdata && \
    rm -rf /var/cache/apk/*

# initialize the PIMF application
RUN php pimf core:init

# expose the external port
EXPOSE 1337

# run the PHP's built-in web server
ENTRYPOINT php -S 0.0.0.0:1337
