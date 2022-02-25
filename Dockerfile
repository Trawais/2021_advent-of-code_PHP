FROM php:8.1.3-cli
COPY --from=composer:2.2.6 /usr/bin/composer /usr/bin/composer
RUN composer --version && php -v
RUN apt update && apt install -y zip unzip
WORKDIR /app
CMD bash
