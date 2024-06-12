1  ls
    2  dir
    3  ls
    4  dir
    5  ls
    6  ip addr
    7  ls
    8  vi /etc/sysconfig/network-scripts/ifcfg-ens192 
    9  sudo service networking restart
   10  vi /etc/sysconfig/network-scripts/ifcfg-ens192 
   11  systemctl restart network
   12  ping 8.8.8.8
   13  exit
   14  ls
   15  passwd
   16  exit
   17  ls
   18  php -v
   19  sudo yum install httpd
   20  httpd -v
   21  ls
   22  history
   23  yum update
   24  ps aux | grep yum
   25  sudo kill 9816
   26  ps aux | grep yum
   27  sudo kill 9897
   28  ps aux | grep yum
   29  sudo kill 9902
   30  sudo rm /var/run/yum.pid
   31  sudo yum install epel-release yum-utils
   32  yum update
   33  sudo yum install httpd
   34  sudo yum install epel-release yum-utils
   35  sudo yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
   36  sudo yum-config-manager --enable remi-php74
   37  sudo yum install php php-common php-opcache php-mcrypt php-cli php-gd php-curl php-mysqlnd
   38  php -v
   39  sudo yum install mariadb mariadb-server
   40  sudo systemctl start httpd
   41  sudo systemctl enable httpd
   42  sudo systemctl start mariadb
   43  sudo systemctl enable mariadb
   44  sudo mysql_secure_installation
   45  sudo yum install phpmyadmin
   46  sudo ln -s /usr/share/phpMyAdmin /var/www/html/phpmyadmin
   47  sudo systemctl restart httpd
   48  yum install nano
   49  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   50  sudo systemctl restart httpd
   51  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   52  sudo ln -s /usr/share/phpMyAdmin /var/www/html/phpmyadmin
   53  sudo systemctl restart httpd
   54  systemctl status httpd.service
   55  journalctl -xe
   56  sudo systemctl start httpd
   57  systemctl stop httpd.service
   58  systemctl start httpd.service
   59  systemctl status httpd.service
   60  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   61  systemctl start httpd.service
   62  systemctl status httpd.service
   63  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   64  sudo systemctl restart httpd
   65  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   66  systemctl stop httpd.service
   67  systemctl start httpd.service
   68  sudo nano /etc/httpd/conf.d/phpMyAdmin.conf
   69  sudo ls /etc/httpd/conf.d/
   70  sudo ls /etc/httpd/conf.d/php.conf 
   71  sudo nano /etc/httpd/conf.d/php.conf 
   72  sudo firewall-cmd --get-active-zones
   73  sudo firewall-cmd --zone=public --add-service=http --permanent
   74  sudo firewall-cmd --reload
   75  sudo yum install epel-release
   76  sudo yum install composer
   77  composer create-project --prefer-dist laravel/laravel:^8.0 crmfsi
   78  cd crmfsi
   79  sudo chown -R apache:apache storage bootstrap/cache
   80  sudo chmod -R 775 storage bootstrap/cache
   81  sudo yum install nodejs
   82  sudo yum install npm
   83  sudo npm install -g @angular/cli@12
   84  cd ..
   85  ng new crmfsiFN
   86  ls
   87  cd crmfsiFN
   88  ls
   89  history 
   90  cd ..
   91  echo history > history.txt
   92  ls
   93  cat history.txt 
   94  history
   95  history > history.txt
