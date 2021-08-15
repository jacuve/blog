<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Instrucciones
si no tienes el instalador de laravel :
composer global require laravel/installer
laravel new blog
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache


Instalar plugin de visual studio code Laravel snippets  
laravel blade snippets

Crear controlador :
php artisan make:controller HomeController


Crear base de datos
Configurar .env

php artisan migrate

Hacer nuestras propias migraciones
php artisan make:migration cursos

php artisan migrate

Paso atras
php artisan migrate:rollback

Si hago dos rollback, deshago todo, y puedo borrar el ultimo fichero, para crearlo de otra forma.

php artisan make:migration create_cursos_table

elimina todas las tablas y ejecuta de nuevo. Solo en desarrollo, elimina todo.
php artisan migrate:fresh

hace todos los down, y despues todos los up
php artisan migrate:refresh

Añadir campo a tabla
php artisan make:migration add_avatar_to_users_table


para modificar columnas 
composer require doctrine/dbal

Para crear un modelo:
php artisan make:model user

php artisan make:model curso

Para administrar la base de datos
php artisan tinker

Para asignar una tabla distinta a un modelo , dentro del modelo

protected $table = 'nuevatabla';

Eliminar todas las tablas, solo en desarrollo :
php artisan migrate:reset

Una vez hago reset, elimino las migraciones que no quiero,y pongo la base de datos como quiero, para despues hacer el migrate inicial.


Ejecuta seeders, e inserta registros :
php artisan db:seed

Para muchos seeders, un archivo para cada modelo.
php artisan make:seeder CursoSeeder

para ejecutar los dos
php artisan migrate:fresh --seed

Para rellenar muchos datos usamos factory:

php artisan make:factory CursoFactory --model=Curso

en Curso factory la definicion

    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }

en CursoSeeder, la llamada :

Curso::factory(50)->create();

o mejor en DatabaseSeeder : 
Curso::factory(50)->create();


Los formularios deben llevar por defecto un token @csrf

Para enviar el metodo put, html no lo tiene , hay que dejar el post, y poner otra directiva :
@method('put')

Crear un form request :
php artisan make:request StorePostRequest

voy por el capitulo 17 . Que es la asignacion masiva.

