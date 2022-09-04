## install composer
### install nginx
    sudo apt install nginx

sudo apt install php7.4-curl php7.4-gd php7.4-json php7.4-mbstring && /

sudo apt install php7.4-zip php7.4-fpm php7.4-cli php7.4-dev && /

sudo apt install libpcre3-dev php7.4-xml php7.4-mysql && /
 
sudo apt install php7.4-imagick && /

sudo apt install php7.4-mysql php7.4-pgsql && /

sudo apt install -y php7.4

### if this doesnt work
wget  https://bitnami.com/redirect/to/2174355/bitnami-lampstack-8.1.9-0-linux-x64-installer.run

rename to bit.run

chmod 755 bit.run

lamp workspace /home/codespace/lamp

Mysql acct root pass rooroot

Apache web port 8081

### OTHER WAY IS TO USE DOCKER 

reference https://hub.docker.com/r/phalconphp/ubuntu-16.04

docker pull phalconphp/ubuntu-16.04:php-7.2

docker run --name monsterminter -p 8081:80 -d  phalconphp/ubuntu-16.04:php-7.2

docker run \
    -p 8081:80 \
    -v $(pwd):/app \
    -v $(pwd)/docker/nginx.conf:/etc/nginx/sites-enabled/default:ro \
    phalconphp/ubuntu-16.04:php-7.2

current files
produce /monsterminter this will mount to /app which is configured already
produce/monsterminter/docker/nginx.conf  which will be mount to /etc/nginx/sites-enabled



Run another method 


docker run \
    -p 8081:80 \
    -v $(pwd):/app \
    -v $(pwd)/docker/nginx.conf:/etc/nginx/sites-enabled/default:ro \
    phalconphp/ubuntu-16.04:php-7.2;

5465265d4c5d

### add composer.json
