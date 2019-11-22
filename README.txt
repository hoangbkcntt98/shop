Controller: ./app/Http/Controller
View:./resource/view
Routes:./rotues
Model:./app
Database setting: database/migrations

Cách chạy trên local với Xampp:
1.chỉnh shopapp/.env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbname
DB_USERNAME=root
DB_PASSWORD=
2.cmd: php artisan migrate
3.cmd: php artisan serve
4.webbrowser:
localhost:8000/