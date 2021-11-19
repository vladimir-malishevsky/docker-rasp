FROM nginx:alpine

#Файл конфигурации nginx который лежит в папке под название docker/nginx/host.conf копируем с заменой в директорию образа /etc/nginx/conf.d/default.conf
ADD docker/nginx/host.conf /etc/nginx/conf.d/default.conf
#Указываем рабочую директорию
WORKDIR /var/www/lumen
