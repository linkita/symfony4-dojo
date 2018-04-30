FROM ubuntu:xenial
MAINTAINER Mavi Jiménez <mavi@linkita.net>

RUN apt-get update \
    && apt-get install locales \
    && locale-gen en_US.UTF-8 \
    && LANG=en_US.UTF-8 apt-get install -y curl software-properties-common git wget vim \
    && LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php \

    && apt-get update --fix-missing \

RUN  apt-get install php-pear php7.2-curl php7.2-dev php7.2-gd php7.2-mbstring php7.2-zip \
       php7.2-mysql php7.2-xml \

    && curl https://getcomposer.org/installer > composer-setup.php && \
                php composer-setup.php && \
                mv composer.phar /usr/local/bin/composer && \
                rm composer-setup.php

#ADD etc/docker/development/phpcli/xdebug.ini /etc/php/7.1/cli/conf.d/20-xdebug.ini
#RUN HOST_IP="$(/sbin/ip route|awk '/default/ { print $3 }')" \
#    && echo "xdebug.remote_host=${HOST_IP}" >> /etc/php/7.1/cli/conf.d/20-xdebug.ini



WORKDIR /var/www/dojo/


