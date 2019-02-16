VPS
===========================

Share some files about virtual private server

****

E-mail:brick2008@gmail.com
****

# usage

## vnstat.php

apt install vnstati

chown -R www-data:www-data /var/www/html

## rdate

apt install rdate

cp rdate.* to /etc/systemd/system

systemctl daemon-reload

systemctl enable rdate.timer

systemctl start rdate.timer
