#!/bin/bash
cd /root/wordpress 
cp -r *  /var/www/html
cd /home/ec2-user/opploans2/opploans2
cp -r * /root/wordpress/wp-content/themes/opploans2
chown -R apache:apache /var/www/html
chmod -R 744 /var/www/html

