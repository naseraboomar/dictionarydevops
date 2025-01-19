FROM php:8.0-apache

# نسخ ملفات المشروع إلى الحاوية
COPY . /var/www/html/

# إعداد الصلاحيات
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# تثبيت MySQL extension
RUN docker-php-ext-install mysqli

EXPOSE 80
CMD ["apache2-foreground"]
