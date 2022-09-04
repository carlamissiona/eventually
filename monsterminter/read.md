
## This is a basic Phalcon project 

### The method I used to run phalcon 

** Using docker **
- Having docker with nginx.conf is useful for cluttering htaccess in project ; the Docker image used kept this clean structure ,  I used default server in the nginx.conf
- There are various methods for running I use the one below mounting the nginx conf



docker run \
    -p 8081:80 \
    -v $(pwd):/app \
    -v $(pwd)/docker/nginx.conf:/etc/nginx/sites-enabled/default:ro \
    phalconphp/ubuntu-16.04:php-7.2

current files
produced /monsterminter this will mount to /app which is configured already 
reference https://hub.docker.com/r/phalconphp/ubuntu-16.04 

 
 
