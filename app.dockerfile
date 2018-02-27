# Development

FROM php:7-fpm-alpine

# Install PDO/MySQL support for PHP
RUN docker-php-ext-install pdo pdo_mysql

# Create app directory and set as working directory
RUN mkdir -p /opt/etaromangan
WORKDIR /opt/etaromangan
RUN chown -R www-data:www-data /opt/etaromangan

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Install app dependencies (done before copying app source to optimize caching)
COPY composer.json /opt/etaromangan/
COPY composer.lock /opt/etaromangan/
RUN composer install --no-scripts --no-autoloader

# Copy app source to container
COPY . /opt/etaromangan

# Set Laravel permissions
RUN mkdir -p /opt/etaromangan/storage
RUN chmod -R 0755 /opt/etaromangan/storage
RUN chown -R www-data:www-data /opt/etaromangan/storage
RUN mkdir -p /opt/etaromangan/bootstrap/cache
RUN chmod -R 0755 /opt/etaromangan/bootstrap/cache
RUN chown -R www-data:www-data /opt/etaromangan/bootstrap/cache

# Regenerate autoloader classmap and run post-install scripts
RUN composer dump-autoload --optimize

# Clear cache
# RUN php artisan cache:clear
# RUN php artisan config:clear
# RUN php artisan view:clear
# RUN php artisan route:clear

# Regenerate cache (TODO: check whether to enable this in dev)
# RUN php artisan config:cache
# RUN php artisan route:cache

EXPOSE 9000
CMD ["php-fpm"]
