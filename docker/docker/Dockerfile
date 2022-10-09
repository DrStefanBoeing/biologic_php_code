
FROM php:7.2-apache

# Copy PHP configuration
# Edit docker/php.ini and customize it to your needs
COPY ./docker/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www
# Install PHP extension dependencies (if any)
RUN a2enmod rewrite \
    && apt-get update \
    && echo 'ServerName www.biologic.test' >> /etc/apache2/apache2.conf \
    && apt-get install -y curl git libicu-dev zip unzip nano libgmp3-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install gmp \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer \
    && composer global require hirak/prestissimo --no-plugins --no-scripts \
    && chmod +x /usr/local/bin/composer
#    && pecl install xdebug \
#    && docker-php-ext-enable xdebug

ADD ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy custom command docker-php-pecl-install
COPY ./docker/docker-php-pecl-install /usr/local/bin/

ADD ./docker/run.sh /run.sh
RUN chmod 0755 /run.sh
# Set the workdir

EXPOSE 80

CMD ["/run.sh"]