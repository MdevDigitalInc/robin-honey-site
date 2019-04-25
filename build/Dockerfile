FROM wordpress

#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


RUN chown -R www-data:www-data /var/www

RUN find . -type d -exec chmod 755 {} \;
RUN find . -type f -exec chmod 644 {} \;
