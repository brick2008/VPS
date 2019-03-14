## VPS

Share some files about virtual private server

****
E-mail:brick2008@gmail.com
****

### vnstat.php

apt install vnstati

chown -R www-data:www-data /var/www/html

### rdate.timer rdate.service - NTP port(123/UDP) is blocked?use this!

apt install rdate

cp rdate.timer rdate.service to /etc/systemd/system

systemctl daemon-reload

timedatectl set-ntp false

systemctl enable rdate.timer

systemctl start rdate.timer

### bench.sh - benchmark with bzip2 sha256 md5sum from @sayem314,simplify the code
