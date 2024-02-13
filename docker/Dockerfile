FROM php:8.1

RUN apt-get update && apt-get install -y

RUN apt-get install zlib1g-dev libzip-dev bash -y

RUN docker-php-ext-install mysqli pdo pdo_mysql zip

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html
RUN pwd
RUN ls -la 

CMD [ "sh", "/var/www/html/docker/entrypoint.sh" ]