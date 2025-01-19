FROM php:8.0-apache


COPY . /var/www/html/


RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html


RUN docker-php-ext-install mysqli

EXPOSE 81
CMD ["apache2-foreground"]
