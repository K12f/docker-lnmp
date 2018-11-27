FROM php:7.2-fpm

ENV PHP_REDIS_VERSION=4.0.0

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
        && docker-php-ext-install sockets \
        && pecl install redis-${PHP_REDIS_VERSION} \
        && docker-php-ext-enable redis  \
#        && pecl install pthreads
#        && docker-php-ext-enable pthreads  \
#        && pecl install pcntl
#        && docker-php-ext-enable pcntl  \
        && rm -rf /tmp/pear \
        && rm -r /var/lib/apt/lists/*

 # Install Composer
#ENV COMPOSER_HOME /root/composer
#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#ENV PATH $COMPOSER_HOME/vendor/bin:$PATH

#WORKDIR /www
#RUN usermod -u 1000 tumi
