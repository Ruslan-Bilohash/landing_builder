# BILOHASH Landing Builder — demo / self-host container (PHP 8.2 + Apache)
FROM php:8.2-apache-bookworm

RUN a2enmod rewrite headers

WORKDIR /var/www/html

COPY . /var/www/html/

EXPOSE 80