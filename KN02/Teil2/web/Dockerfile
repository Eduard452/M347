FROM php:8.0-apache

# Installiere mysqli
RUN docker-php-ext-install mysqli

# Kopiere die PHP-Dateien ins richtige Verzeichnis
COPY info.php /var/www/html/
COPY db.php /var/www/html/

EXPOSE 80