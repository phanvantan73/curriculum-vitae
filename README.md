# curriculum-vitae

## Clone source code

```
$ git clone https://github.com/phanvantan73/curriculum-vitae.git
```

## Installation

Generate .env file (if not exists) from .env.example

```bash
cp .env.example .env
```

Install PHP dependencies via Composer

```bash
composer install
```

Generate key

```bash
php artisan key:generate
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
