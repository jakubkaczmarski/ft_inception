FROM debian:buster

RUN apt-get update

RUN apt-get -y install php7.3 wget php-mysqli php-fpm

EXPOSE 9000

COPY ./config/wordpress_start.sh /var/www/
COPY ./config/wp-config.php /var/www/
COPY ./config/www.conf /etc/php/7.3/fpm/pool.d


RUN chmod +x /var/www/wordpress_start.sh

ENTRYPOINT [ "/var/www/wordpress_start.sh" ]

CMD ["/usr/sbin/php-fpm7.3", "--nodaemonize"]

