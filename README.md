
# Doctors Laravel Website

A simple laravel website for doctors


## How To Run The Project Locally

Clone the project

```bash
  git clone https://github.com/elmarasy3018/Doctors_Laravel_Website.git
```

Install composer

```bash
  composer install
```

Create the .env file

```bash
  cp .env.example .env
```

Generate a key

```bash
  php artisan key:generate
```

Migrate and Seed the data

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan serve
```