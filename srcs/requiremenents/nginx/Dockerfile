FROM debian:buster

RUN apt-get update

RUN apt-get install -y nginx openssl

EXPOSE 443

COPY ./config/conf /etc/nginx/sites-enabled/default

COPY ./config/start.sh /var/www

RUN chmod +x /var/www/start.sh

ENTRYPOINT ["/var/www/start.sh"]

CMD ["nginx", "-g", "daemon off;"]

