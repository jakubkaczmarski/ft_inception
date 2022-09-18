#!/bin/sh

echo "Configuring mariadb setup"

chmod 777 /var/lib/mysql

exec mysqld --user=mysql --init-file=/tmp/data_init.sql
