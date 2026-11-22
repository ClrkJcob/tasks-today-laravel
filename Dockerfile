
FROM php:8.5-cli

# Install PHP extensions and their required system dependencies
COPY --from=mlocati/php-extension-installer:latest /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions \
    pdo_sqlite \
    sqlite3 \
    mbstring \
    xml \
    bcmath \
    curl \
    zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel application
COPY . .

# Install Laravel dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# Prepare Laravel directories and SQLite database
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache \
    database \
    && touch database/database.sqlite \
    && chmod -R 775 storage bootstrap/cache database

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite

EXPOSE 10000

CMD ["sh", "-c", "php artisan migrate --force --seed && exec php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"]