# Filename Dockerfile
From debian:buster

RUN apt-get update && apt-get install -y mariadb-server mariadb-client

COPY /tools/maria_setup.sh /tmp/maria_setup.sh

EXPOSE 3306

ENTRYPOINT ["bash", "/tmp/maria_setup.sh"] 

