FROM ubuntu:18.04

RUN apt-get update && apt-get install tzdata
RUN apt-get install -y \
 apache2 \
 php7.2 \
 php-mysql \ 
 libapache2-mod-php\
 wget
COPY pdo-master /var/www/html/pdo-master

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"] 
 

