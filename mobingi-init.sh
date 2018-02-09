#!/usr/bin/env bash
apt-get update
apt-get -y install curl php-cli git
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
cd /var/www/html
composer install
