FROM php:7.4.2-fpm

LABEL version="1.0.0"
LABEL author="dhtmdgkr123"
LABEL email="osh12201@gmail.com"

RUN apt-get -y update && \
    apt-get install -y libpq-dev \
    libonig-dev \
    libicu-dev
    
RUN docker-php-ext-install pdo_mysql && \
    docker-php-ext-install mbstring && \
    docker-php-ext-install mysqli && \
    docker-php-ext-install bcmath && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl
    
RUN pecl install redis && \
    rm -rf /tmp/pear && \
	docker-php-ext-enable redis

RUN docker-php-ext-install sockets
COPY /php/php.ini /etc/php/7.4/fpm/conf.d/40-custom.ini

EXPOSE 9000