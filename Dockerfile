FROM php:latest
RUN apt-get update -y
RUN apt-get install curl git unzip -y
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
RUN php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
COPY . .
RUN composer install
EXPOSE 8000
ENTRYPOINT ["php", "artisan", "serve", "--host", "0.0.0.0", "--port", "8000"]