FROM php:8.1-fpm

ARG USERNAME=laravel
ARG UID=1000

#run non root container
RUN adduser --uid $UID $USERNAME && \
    usermod -a -G www-data,root $USERNAME 

USER $USERNAME

EXPOSE 9000

CMD ["php-fpm"]