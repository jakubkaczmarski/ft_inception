FROM debian:buster

RUN apt-get update && apt-get install -y nginx openssl

RUN openssl req -x509 -nodes -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=DE/ST=Wob/L=Wob/0=42 School/OU=jkaczmar/CN=jkaczmar"

COPY ./tools/file.conf /etc/nginx/sites-enabled/default

EXPOSE 443

CMD ["nginx", "-g", "daemon off ;"];

