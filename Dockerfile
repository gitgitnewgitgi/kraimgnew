# Use official PHP with Apache
FROM php:8.2-apache

COPY . /var/www/html/

EXPOSE 80
