FROM debian:buster

RUN apt-get update

RUN apt-get install -y mariadb-server

EXPOSE 3306

COPY ./config/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./config/init_db.sql /var/www/


RUN service mysql start && mysql < /var/www/init_db.sql && rm -f /var/www/init_db.sql;

CMD ["mysqld"]
