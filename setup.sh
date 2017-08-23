#!/bin/sh

clear
echo "  _   _ ____ _____ _____ _               _ _ _   _               "
echo " | \ | |  _ \_   _| ____| |             (_|_) |_| | ____ _ _ __  "
echo " |  \| | |_) || | |  _| | |      _____  | | | __| |/ / _\` | '_ \ "
echo " | |\  |  __/ | | | |___| |___  |_____| | | | |_|   < (_| | |_) |"
echo " |_| \_|_|    |_| |_____|_____|         |_|_|\__|_|\_\__, | .__/ "
echo "                                                     |___/|_|    "
DIR="$(pwd)"

echo -n "Probing storage devices ... "
lsblk --nodeps | grep disk | awk -F"    " '{print $1}'
fdisk -l 
echo "done"

echo -n "Creating mount points ... "
fdisk -l
echo "done"

echo -n "Mounting all external storage devices ... "
sudo mount -t vfat -o umask=022,gid=achackr,uid=achackr /dev/sdb1 /media/pendrv
echo "done"

echo -n "Creating Directory ... "
#sudo mkdir -P /var/www/html
echo "done"

echo -n "Installing apache & php ... "
#sudo apt-get install libapache2-mod-php
echo "done"

echo -n "Configuring Apache ... "
#sudo a2enmod rewrite

#sed 's/ServerAdmin .*$/ServerAdmin stand.spam+nptel@adm.iitkgp.ernet.in/g' '/etc/apache2/sites-available/000-default.conf'
#sed 's#DocumentRoot /var/www/.*$#DocumentRoot /var/www/html\n<Directory "/var/www/html">\nAllowOverride All\n</Directory>#g' '/etc/apache2/sites-available/000-default.conf'
echo "done"

echo -n "Restarting Apache ... "
#sudo service apache2 restart
echo "done"

php -r '$str = "";$arr = explode("/", "/media/achackr/KINGSTON");foreach($arr as $val){$str .= $val."/"; system("chmod ugoa+x ".$str); echo "chmod ugoa+x ".$str."\n";} echo "chmod -R ugoa+x ".$str;'
