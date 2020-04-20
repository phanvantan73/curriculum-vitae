# curriculum-vitae

## Clone source code

```
$ git clone 
```

## Installation

Generate .env file (if not exists) from .env.example

```bash
cp .env.example .env
```

Generate key

```bash
php artisan key:generate
```

Install PHP dependencies via Composer

```bash
composer install
```

Migrate database

```bash
php artisan migrate
```

Clear config

```bash
php artisan config:clear
```

Install dependencies

```bash
yarn install
```

Run development

```bash
yarn watch
```

## Run app in local

```bash
php artisan serve
```

- Application: http://localhost:8000
