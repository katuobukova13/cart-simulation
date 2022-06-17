## About Project

Методы для работы с товарами:
- Создать товар
- Положить товар в корзину
- Получить список товаров из корзины

Что необходимо использовать:
- Laravel 

## Run Project
- cp .env.example .env
- docker run --rm -v ${PWD}:/app -w /app --user $(id -u):$(id -g) composer:2.2.7 install --ignore-platform-reqs
- docker-compose up -d
- docker-compose exec app php artisan migrate
- docker-compose exec app php artisan db:seed --class=ProductSeeder

## Swagger
http://localhost:8080/api/documentation/
