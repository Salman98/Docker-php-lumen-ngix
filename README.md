# Docker-php-lumen-ngix
* In this repo first i create a lumen project on local then i write a docker file so i can run this in container 

# Features
* used `opcache` to cache all laravel boostrap files in memory 

# Note
* make sure before run the docker command delete the vendor folder or add .dockerignore file 

#To Run this 
* docker-compose up --build --force-recreate -d
