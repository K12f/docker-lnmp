FROM php:${PHP_VERSION}-fpm


ENV TZ=${TIME_ZONE}

RUN apt-get update && apt-get install -y \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
	&& docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-install zip \
        && docker-php-ext-install pdo_mysql \
        && docker-php-ext-install opcache \
        && docker-php-ext-install mysqli \
        && docker-php-ext-install bcmath \
        && docker-php-ext-install mbstring \
        && docker-php-ext-install sockets \
        && docker-php-ext-install sockets \
        && pecl install redis
        && echo "extension=redis.so" > /usr/local/etc/php/conf.d/redis.ini
        && rm -r /var/lib/apt/lists/*

 # Install Composer
#ENV COMPOSER_HOME /root/composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#ENV PATH $COMPOSER_HOME/vendor/bin:$PATH

#WORKDIR /www
#RUN usermod -u 1000 tumi
