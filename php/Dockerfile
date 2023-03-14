FROM php:8.1-fpm-buster
ARG TIMEZONE

MAINTAINER Tao309 <tao309@mail.ru>

ENV XDEBUG_PORT 9000

#COPY php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

RUN apt-get update && apt-get install -y \
    gnupg \
    g++ \
    procps \
    openssl \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libfreetype6-dev \
    libpng-dev \
    libjpeg-dev \
    libicu-dev  \
    libonig-dev \
    libxslt1-dev \
    acl \
    && echo 'alias sf="php bin/console"' >> ~/.bashrc

RUN docker-php-ext-configure gd --with-jpeg --with-freetype

RUN yes | pecl install xdebug  && docker-php-ext-enable xdebug && \
    echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.iniOLD

RUN docker-php-ext-install \
    pdo pdo_mysql zip xsl gd intl opcache exif mbstring calendar

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN apt-get install -y openssl && curl -sS https://get.symfony.com/cli/installer | bash && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.2.4

RUN docker-php-ext-install pdo pdo_mysql

RUN mkdir -p /root/.ssh && mkdir -p /root/.composer
ADD ./ssh/github_rsa /root/.ssh/github_rsa
#ADD ./ssh/config /root/.ssh/config

RUN chmod 600 ~/.ssh/github_rsa && chmod 600 ~/.ssh/  \
    # && ssh -T git@github.com && ssh-keyscan github.com >> ~/.ssh/known_hosts \
    && eval "$(ssh-agent -s)" && ssh-add  ~/.ssh/github_rsa  \
    && chmod -R 777 ./

RUN git config --global user.email "taoman309@gmail.com" && git config --global user.name "Tao309"

WORKDIR /var/www