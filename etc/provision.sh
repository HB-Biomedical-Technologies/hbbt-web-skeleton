#!/usr/bin/env bash

# Use a Vagrantfile based on hashicorp/precise64

apt-get update >/dev/null 2>&1

cd /vagrant

mkdir www
chown vagrant:vagrant www

echo "=== Installing Apache..."
apt-get install -y apache2

# Enable mod_rewrite, allow .htaccess and fix a virtualbox bug according to
# https://github.com/mitchellh/vagrant/issues/351#issuecomment-1339640
a2enmod rewrite
sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/sites-enabled/000-default
echo EnableSendFile Off > /etc/apache2/conf.d/virtualbox-bugfix

# Link to www dir
rm -rf /var/www
ln -fs /vagrant/www /var/www

echo "=== Installing curl..."
apt-get install -y curl

echo "=== Installing PHP..."
apt-get install -y php5 php5-gd php5-mysql php5-curl php5-cli php5-sqlite

echo "=== Installing PHP utilities (Composer)..."
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin

echo "=== Installing PHP utilities (phing)..."
wget -q -O /usr/local/bin/phing.phar http://www.phing.info/get/phing-latest.phar && chmod 755 /usr/local/bin/phing.phar

echo "=== Installing Mysql..."
export DEBIAN_FRONTEND=noninteractive
apt-get -q -y install mysql-server mysql-client

echo "=== Creating Mysql DB (named haxe)..."
mysql -u root -e "create database haxe"

echo "=== Restarting Apache..."
service apache2 restart

# ----- Services installed, time for Haxe and all its targets -----

echo "=== Installing Haxe..."
wget -q http://www.openfl.org/builds/haxe/haxe-3.1.3-linux-installer.tar.gz -O - | tar -xz
sh install-haxe.sh -y >/dev/null 2>&1
rm -f install-haxe.sh

echo "=== Installing C++..."
apt-get install -y gcc-multilib g++-multilib
haxelib install hxcpp >/dev/null 2>&1

echo "=== Installing C#..."
apt-get install -y mono-devel
haxelib install hxcs >/dev/null 2>&1

echo "=== Installing Java..."
apt-get install -y default-jdk
haxelib install hxjava >/dev/null 2>&1

echo "=== Installing Node.js..."
apt-get install -y nodejs

echo "=== Installing Phantomjs..."
apt-get install -y phantomjs

echo "=== Installing mod_neko for Apache..."

cat > /etc/apache2/conf.d/neko <<EOL
LoadModule neko_module /usr/lib/neko/mod_neko2.ndll
AddHandler neko-handler .n
DirectoryIndex index.n
EOL

mkdir /vagrant/src

cat > /vagrant/src/Index.hx <<EOL
class Index {
    static function main() {
        trace("Hello World !");
    }
}
EOL

cat > /vagrant/src/build.hxml <<EOL
-neko ../www/index.n
-main Index
EOL

chown -R vagrant:vagrant src
su vagrant -c 'cd /vagrant/src && haxe build.hxml'

service apache2 restart

cd /vagrant

echo "=== Done!"
