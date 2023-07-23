# Introduction.
There are two services.
- Nginx in webserver container
- Php in php container via php-fpm on port 9000

# Install.
Simply execute,  
`docker-compose up -d --build php`

# Webserver  
Webserver is running on port 8080.
To access it provide below url on your browser url bar.  
`http://127.0.0.1:8080/info.php`  
This will show a page with the current php info of the server.

# Nginx
Nginx default config is located at `.docker/nginx/default.conf`

# Xdebug
Xdebug settings are at `.docker/php/conf.d/xdebug.ini`