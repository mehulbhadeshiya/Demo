#!/bin/bash
cp -r * /var/www/html/site/wp-content/themes/opploans2
cd /var/www/html/
find . -type d -exec chmod 0755 {} \;
find . -type f -exec chmod 0644 {} \;
chown -R dev88c9:sftponly *
