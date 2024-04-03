# Install and Set Up Laravel Microservice with Docker Compose Part Two

Setting up Laravel in the local environment with Docker using the LEMP stack that includes: Nginx, Msql, PHP, and phpMyAdmin .



## How to Install and Run the Project

1. ``` git clone git@github.com:paularinzee/Laravel-order-microservice-with-rabbitMQ.git ```
2. ``` docker-compose exec order_app composer install ```
3. Copy ```.env.example``` to ```.env```
4. ``` In your app’s .env file, set parameters using the Rabbbitmq host and AMQP details like this: ```
    - [x] RABBITMQ_HOST=seal-01.lmq.cloudamqp.com
    - [x] RABBITMQ_PORT=5672
    - [x] RABBITMQ_USER=pilojgeg
    - [x] RABBITMQ_PASSWORD=dDx1k4TSrmYfbXEPADtGgbMbE14mx8iq
    - [x] RABBITMQ_VHOST=pilojgeg

5. ```run: docker-compose build```
6. ```run: docker compose up -d```
7. ```run: docker-compose exec order_app php artisan migrate```

8. ```run: docker-compose exec order_app php artisan queue:work```
9. ``` To create a new order, you would send a POST request to the /products endpoint with the following keys ```
    - [x] product_id
    - [x] count
    
