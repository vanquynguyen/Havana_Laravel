
FROM ubuntu:16.04
MAINTAINER "blabla"

ENV DB_USERNAME = "root"
ENV DB_PASS = "789852"
ENV workdir = ./

WORKDIR = ${workdir}
ADD . "./"

RUN apt-get update && apt-get install -y \
    software-properties-common locales
# Install PHP
RUN apt-get update -y && \ 
    apt-get install software-properties-common -y
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
RUN apt-get update -y && apt install -y --force-yes\
     php7.1 php7.1-xml \
     php7.1-mbstring \
     php7.1-mysql \
     php7.1-json \
     php7.1-curl \
     php7.1-cli \
     php7.1-common \
     php7.1-mcrypt \
     php7.1-gd \
     libapache2-mod-php7.1 \
     php7.1-zip

RUN php --version
# Install Apache
RUN apt-get update -y && \
    apt-get install apache2 libapache2-mod-php7.1 -y

# Install composer
RUN apt-get update -y  && \
    apt-get install curl -y
RUN curl -sS https://getcomposer.org/installer | php 
RUN mv composer.phar /usr/bin/composer

RUN composer update

# Update composer
CMD [ "php", "artisan", "serve" ]
