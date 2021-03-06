#instal tolls
apt-get update
apt-get install git wget nginx vim unzip php7.3-fpm php-mysql lsb-release gnupg php7.3-mbstring  -y

#nginx
cd /etc/nginx/sites-available/
rm default
cp /def .
mv def default
echo "daemon off;" >> /etc/nginx/nginx.conf
service nginx start

#phpmyadmin
cd /var/www/html/
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-all-languages.zip
unzip phpMyAdmin-5.0.1-all-languages.zip
rm phpMyAdmin-5.0.1-all-languages.zip
mv phpMyAdmin-5.0.1-all-languages phpmyadmin
mkdir /var/www/html/phpmyadmin/tmp
chmod 777 /var/www/html/phpmyadmin/tmp
rm -rf  var/www/html/phpmyadmin/config.sample.inc.php
cp /config.inc.php /var/www/html/phpmyadmin/
service php7.3-fpm start

#ssl
mkdir -p /etc/nginx/ssl
cp /cert.pem /etc/nginx/ssl/
cp /cert.key /etc/nginx/ssl/

#mysql
wget https://dev.mysql.com/get/mysql-apt-config_0.8.14-1_all.deb
export DEBIAN_FRONTEND=noninteractive
echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | /usr/bin/debconf-set-selections
dpkg -i mysql-apt-config_0.8.14-1_all.deb
apt-get update
apt-get install mysql-server -y
chown -R mysql: /var/lib/mysql
service mysql start
mysql -u root -e "GRANT ALL PRIVILEGES ON *.* TO 'rel-bour'@'localhost' IDENTIFIED BY 'rel-bour';";
mysql -u root -e "CREATE DATABASE wordpress;";
mysql -u root -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost';";
mysql -u root -e "FLUSH PRIVILEGES;";


#wordpress
cd /var/www/html/
wget https://wordpress.org/latest.zip
unzip *.zip
rm *.zip
cp /wp-config.php /var/www/html/
rm -rf /var/www/html/wp-config-sample.php
cp -r /var/www/html/wordpress/* /var/www/html/
cd /
###################




#install supervisord
cd /
apt-get -y install supervisor;
mkdir -p /var/log/supervisor;
mkdir -p /etc/supervisor/conf.d;
mv supervisord.conf /etc/supervisord.conf;


mysql -u root wordpress < localhost.sql

#service php7.3-fpm start
#service nginx start
#chown -R mysql: /var/lib/mysql
#service mysql start
