ping 8.8.8.8
sudo apt-get update 
sudo apt-get install mysql
sudo apt-get install mysql -y
sudo apt-get install mysql-server
mysql -h database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com -u admin -p
telnet database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com 3306
ifconfig
telnet database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com 3306
mysql -h database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com -u admin -p
sudo apt-get install -y httpd24 php70 php70-mysqlnd
sudo apt install apache2
sudo apt-get install php7.2 php7.2-cli php7.2-common
sudo apt search php7.2
sudo apt-get install php libapache2-mod-php php-mcrypt php-mysql
sudo systemctl start htpd
sudo systemctl restart apache2
sudo systemctl status apache2
clear
sudo usermod -a -G apache ec2-user
sudo usermod -a -G apache2 ec2-user
group
groups
wget http://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
sudo apt-get install php5-gd libssh2-php
cd wordpress/
ll
cp wp-config-sample.php wp-config.php
ll
curl -s https://api.wordpress.org/secret-key/1.1/salt/
sudo vi wp-config.php 
mysql -h database-1.cp1radpbekjc.us-west-2.rds.amazonaws.com -u admin -p
sudo vi wp-config.php 
sudo rsync -avP ~/wordpress/ /var/www/html/
cd /var/www/html
sudo chown -R demo:www-data *
adduser demo
sudo adduser demo
gpasswd -a demo sudo
sudo gpasswd -a demo sudo
sudo chown -R demo:www-data *
mkdir /var/www/html/wp-content/uploads
sudo mkdir /var/www/html/wp-content/uploads
sudo chown -R :www-data /var/www/html/wp-content/uploads
sudo systemctl restart apache2.service 
sudo apt-get install php5-gd libssh2-php
ls
sudo apt-get update 
sudo apt-get install python-pip
sudo pip install awscli
aws configure
cd .aws/
ls
cd wordpress/
ls
pwd
cd
cd .aws/
aws s3 cp /home/ubuntu/wordpress s3://syamjith-admin --recursive
