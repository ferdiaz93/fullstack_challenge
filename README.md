### Instalacion
Crear DB (MySQL) y completar los campos del archivo .env.example
```
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
renombrar el archivo a '.env'

Iniciar backend
```sh
$ cd back
$ composer install
$ php artisan migrate
$ php artisan serve
```

Iniciar frontend
```sh
$ cd front
$ npm install
$ npm start
```
