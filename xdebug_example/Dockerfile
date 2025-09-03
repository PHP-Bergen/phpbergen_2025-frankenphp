FROM dunglas/frankenphp:latest

WORKDIR /app

RUN install-php-extensions \
  pdo_mysql \
  gd \
  intl \
  zip \
  xdebug \
  opcache

COPY . /app

EXPOSE 80

CMD ["frankenphp", "php-server", "--root=/app/public", "--listen=:80"]
