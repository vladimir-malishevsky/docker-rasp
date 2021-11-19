FROM php:8.0-fpm

#Указываем рабочую директорию
WORKDIR /var/www/lumen

#Обновляем список репозиториев и устанавливаем расширения PDO для php
RUN apt-get update && docker-php-ext-install pdo pdo_mysql
