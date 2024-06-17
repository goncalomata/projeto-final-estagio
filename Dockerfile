FROM php:8.3.6-apache
RUN apt-get update && apt-get install -y \
    curl \
    unzip \
    nano \
    libpng-dev \
    libz-dev \
    libmagickwand-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && apt-get clean \
    && rm -fr /var/lib/apt/lists/*    

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN chown 755 /var/www/html
COPY ["app/composer.json", "/var/www/html"]
WORKDIR /var/www/html
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer update --prefer-dist
RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql gd