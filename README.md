# Test Place to pay

## Descripción

El siguiente ejercicio es la integracion de place to pay en un ecomerce sencillo, adiciona clientes, realiza la compra de un unico producto y en lista todo las ordenes con su respectivo estado.

## Tecnologías usadas
  * [Laravel 9.X](https://laravel.com/docs/9.x/installation)
  * [Livewire](https://laravel-livewire.com/)
  * [Jquery](https://jquery.com/)
  * [MySQL](https://www.mysql.com)
  * [TailWindCSS](https://tailwindcss.com)
  
## Requerimientos previos
  * [PHP 8](https://www.php.net/downloads)
  * [Composer](https://getcomposer.org)

## Insatalación del proyecto
### Clonar el repositorio
```
git@github.com:Kevam97/evertecTest.git
```

### Instalar dependencias
```
$ cd insignias
$ composer install
$ npm install
```

## Configuración
### Variables de entorno
Crear el fichero `.env` para el almacenamiento de las variables de entorno
```
$ cp .env.example .env
```
Una vez creado el fichero ingresar a el y configurar el usuario y contraseña de la base de datos a la cual se va a apuntar
### Generar una key
```
$ php artisan key:generate
```
Después de crearla validar que se haya incluido al inicio del fichero `.env`
### Base de datos
Configurar  dentro del archivo sus variables de etorno correspondiente a la conexión con la base de datos
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=evertec
DB_USERNAME=root
DB_PASSWORD=
```
### Migraciones y seeders
Ejecutar las migraciones hacia la base de datos
```
$ php artisan make migrate
```
Después insertar datos de prueba en la tabla customers

```
php artisan db:seed --class=CustomerSeeder
```

### Credenciales place to pay

Verficar las credenciales LOGIN y SECRET_KEY en el .env, dado a que, presenta un error 401 Unauthorized 



## Iniciar servidor local
Para arrancar el servidor Vite y correr tailwind
```
$ npm run dev
```
Para arrancar un servidor local
```
$ php artisan serve
```
