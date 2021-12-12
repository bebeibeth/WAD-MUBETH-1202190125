step installation

1. git clone
2. composer update
3. cp .env.example .env
4. php artisan key:generate
5. php artisan storage:link
6. php artisan migrate 
7. To start server 
php artisan serve