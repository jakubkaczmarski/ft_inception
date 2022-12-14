#!/bin/bash

if [ ! -f /etc/ssl/certs/nginx.crt ]; then
	echo "SETTING UP ssl";
	openssl req -x509 -nodes -days 365 -newkey rsa:4096 -keyout /etc/ssl/private/nginx.key -out /etc/ssl/certs/nginx.crt -subj "/C=DE/ST=WOB/L=WOB/O=wordpress/CN=jkaczmar.42.fr/";
	echo "SSL IS SET";

fi

exec "$@"
