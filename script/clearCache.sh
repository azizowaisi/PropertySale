#!/bin/bash

composer dump-autoload --optimize --classmap-authoritative

php bin/console cache:clear --no-warmup

chmod -R 777 var/cache


