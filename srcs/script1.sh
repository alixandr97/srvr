apt-get update
apt-get install git wget nginx vim unzip php7.3-fpm php-mysql lsb-release gnupg php7.3-mbstring -y
cd /var/www/html/
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
rm phpMyAdmin-5.0.1-all-languages.zip
mv phpMyAdmin-5.0.1-all-languages phpmyadmin
cd /etc/nginx/sites-available/
rm default
echo "daemon off;" >> /etc/nginx/nginx.conf

cp /def .
mv def default

cd /

#cp /srcs/default /etc/nginx/sites-available/

wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start
#service nginx start
#service php7.3-fpm start
####

cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip *.zip
rm *.zip
rm -rf /var/www/html/wordpress/wp-config-sample.php
cd /
cp ./wp-config.php /var/www/html/wordpress/
cd /
#install supervisord
apt-get -y install supervisor;
mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv supervisord.conf /etc/supervisord.conf;
##mysql -u root -p

mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'reda'@'localhost' IDENTIFIED BY 'reda';";
mysql -u root -e "CREATE DATABASE wordpress;";
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';";
mysql -u root -e "FLUSH PRIVILEGES;";
#mysqld_safe --skip-grant-tables &

#mysql -u root -e "update mysql.user set plugin = 'mysql_native_password' where user='root';";



mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp

rm -rf  var/www/html/phpmyadmin/config.sample.inc.php

cp ./config.inc.php /var/www/html/phpmyadmin/
