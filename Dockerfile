FROM mstrazds/nginx-php7

MAINTAINER Abel Pastor Orts

RUN apt-get update \
    && php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY ./ /var/www

COPY ./.env.docker /var/www/.env

WORKDIR /var/www

RUN chown -R www-data:www-data storage
