FROM php:7.4-fpm

RUN apt-get update

RUN apt-get install nano -y \
 openssl -y \
 libssl-dev -y \
 wget -y \
 git -y \
 zip -y \
 unzip -y \
&& docker-php-ext-install \
    pdo \
    pdo_mysql \
    mysqli \
    opcache

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure composer bitbucket auth
#RUN composer global config bitbucket-oauth.bitbucket.org $bitbucket_key $bitbucket_secret

WORKDIR /var/www/html

COPY ./src /var/www/html

RUN composer install

COPY ./src/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
