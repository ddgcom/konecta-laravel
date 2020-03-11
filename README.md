<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Manual
Download the master branch

```bash
git clone https://github.com/ddgcom/konecta-laravel.git
```

Make a copy `.env.example` and rename to `.env`

Install the composer dependencies

```bash
composer install
```

Finally make sure you have a database named `blender`, and run the migrations and seeds

```bash
php artisan migrate --seed
```

Run localhost

```bash
php artisan serve
```

## Routes
```bash
php artisan route:list
```

## Api REST with JWT
```bash
Method: POST
[http://127.0.0.1:8000/]/api/login

body data: ['email' => 'YOUR_EMAIL_ACCOUNT', 'password' => 'YOUR_PASSWORD']
```

## Bugs
Cualquier duda o inconveniendo por favor contactarme info@ddg.com.co

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
