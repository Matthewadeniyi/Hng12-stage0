FROM php:8.1-apache # or a later PHP version if needed

COPY . /var/www/html

# Set file permission (important)
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

EXPOSE 80 # Apache defaut port