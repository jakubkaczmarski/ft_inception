# Filename Dockerfile
From debian:buster

RUN apt-get update && export DEBIAN_FRONTEND=noninteractive && apt-get install -y unzip wget mariadb-client php php7.3-fpm php-curl php-gd php-mbstring php-xml php-pear php-bcmath php-soap php-intl php-zip 

WORKDIR /var/www

RUN usermod -u 1000 www-data && wget https://wordpress.org/latest.zip && chown www-data:www-data /var/www/latest.zip && mkdir /run/php

RUN chown -R www-data:www-data /var/

RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

COPY ./tools/setup_wp.sh /tmp/setup_wp.sh
COPY ./tools/wp-config.php /tmp/wp-config.php
COPY ./tools/www.conf /tmp/www.conf
ENTRYPOINT ["bash", "/tmp/setup_wp.sh"] 

