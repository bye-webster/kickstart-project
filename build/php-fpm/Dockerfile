FROM php:7.1-fpm

MAINTAINER Paulo Dias <prbdias@gmail.com>

COPY ./php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
    libpq-dev \
    curl \
    libfreetype6-dev \
		libjpeg62-turbo-dev \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd

# Install extensions using the helper script provided by the base image
RUN docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

RUN usermod -u 1000 www-data

WORKDIR /var/www

CMD ["php-fpm"]

EXPOSE 9000
