FROM php:8.1-apache

RUN apt-get update \
	&& apt-get install autoconf libicu-dev zip unzip -y \
	&& docker-php-ext-configure intl \
	&& docker-php-ext-install intl mysqli\
	&& docker-php-ext-enable intl 

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
	&& a2enmod rewrite \
	&& service apache2 restart

EXPOSE 80

