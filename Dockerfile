FROM webdevops/php-nginx:7.3
ENV WEB_DOCUMENT_ROOT=/app/public
ENV WEB_DOCUMENT_INDEX=index.php
ENV PHP_DATE_TIMEZONE="Europe/Paris"
ENV PHP_DISPLAY_ERRORS=1
RUN apt -yqq update
RUN apt -yqq install libxml2-dev
RUN docker-php-ext-install xml
COPY ./app app/
RUN cd app && composer install --ignore-platform-reqs --no-scripts
RUN cd /app && mkdir var && mkdir var/cache && mkdir var/cache/dev && mkdir var/logs && chown -R www-data:www-data var/
#RUN cd /app && mkdir var && mkdir var/cache && mkdir var/cache/dev && mkdir var/logs

