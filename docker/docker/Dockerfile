
FROM php:7.2-apache

# Copy PHP configuration
# Edit docker/php.ini and customize it to your needs
COPY ./docker/php.ini /usr/local/etc/php/php.ini

# Install PHP extension dependencies (if any)
RUN a2enmod rewrite \
    && apt-get update \
    && echo 'ServerName localhost' >> /etc/apache2/apache2.conf \
    && apt-get install -y curl git libicu-dev zip unzip nano \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD ./docker/vhost.conf /etc/apache2/sites-available/000-default.conf


# Copy custom command docker-php-pecl-install
COPY ./docker/docker-php-pecl-install /usr/local/bin/



ADD ./docker/run.sh /run.sh
RUN chmod 0755 /run.sh

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

# Set the workdir
WORKDIR /var/www
EXPOSE 80
CMD ["/run.sh"]
