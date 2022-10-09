#!/bin/bash
mkdir -p /app/cache /app/logs
touch /var/www/app/logs/prod.log
touch /var/www/app/logs/dev.log
chgrp -R www-data .
chmod -R g+w /var/www/app/cache /var/www/app/logs
source /etc/apache2/envvars
tail -F /var/log/apache2/* /var/www/app/logs/prod.log /var/www/app/logs/dev.log &
exec apache2 -D FOREGROUND
