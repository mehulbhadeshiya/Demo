#!/bin/bash
cd /root/wordpress 
cp -r *  /var/www/html
cd /home/ec2-user/independent-publisher/independent-publisher
cp -r * /root/wordpress/wp-content/themes/independent-publisher
chown -R apache:apache /var/www/html
chmod -R 744 /var/www/html

