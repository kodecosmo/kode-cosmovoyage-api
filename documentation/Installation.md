# Installation

## Database migrations

### Initiallizing the Database and the tables.

```
php artisan migrate
```

### Drop All Tables & Migrate

The migrate:fresh command will drop all tables from the database and then execute the migrate command:

```
php artisan migrate:fresh
```