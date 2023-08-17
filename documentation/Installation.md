# Installation

Make shure to check whether you have the required softwares and libraries mentioned below.

## Pre-requirements

1. linux-wsl for windows, linux or mac os pc
2. php-nts ( 8.1 or greater )
3. mysql ( 8.0 or greater )
4. composer
5. git
6. laravel installer installed ( optional )

## Autorun setup

Run the `setup.sh` inside the root folder.

```
sudo ./setup.sh
```
or

```
sh ./setup.sh
```
or

```
bash ./setup.sh
```

## Manual Installation

Follow the given bellow steps without skipping any of them.

### 1. Clone GitHub repo using the repository url

```
git clone https://github.com/kodecosmo/kode-cosmovoyage-api.git
```

### 2. cd into the project

```
cd kode-cosmovoyage-api
```

### 3. Create a copy of your .env file

```
cp .env.example .env
```

### 4. Install Composer Dependencies

```
composer update

composer install
```

### 5. Generate an app encryption key

```
php artisan key:generate
```

### 6. Create an empty database for our application

Create an empty database for your project using `musql-cli`, `phpmyadmin` or `Heidisql`, your database name should correspond with your project name.

### 7. Add database information to allow web app to connect to the database.

In the `.env` file, fill `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` options to match the details of the database you just created. This will allow us to run migrations and seed the database if there is any table to seed.

E.g. 

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kode_cosmovoyage
DB_USERNAME=root
DB_PASSWORD=
```

### 8. Turn the website from DEVELOPMENT => PROJECT ( Skip if the development is not finished )

In the `.env` file, change the `APP_ENV` from `local` to `production`

### 9. Autoloader Optimization ( Skip if the development is not finished )

When deploying to production, make sure that you are optimizing Composer's class autoloader map so Composer can quickly find the proper file to load for a given class:

```
composer install --optimize-autoloader --no-dev
```

### 10. Run the App Installation command

This will ease all of your tasks by,

1. Create the required the databse if not exists and the tables.
2. Seeding fake/dummy data.
3. Clear the configurations.
4. Caching configurations.
5. Caching events.
6. Caching routes
7. Caching views
8. Create an admin account.
9. Create an user account.

```
php artisan app:install
```

### 11. Run the API

Inside the root directory run the below command.

```
php artisan serve
```

@Thank You, Kenura R. Gunarathna