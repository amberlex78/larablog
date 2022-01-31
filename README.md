# Laravel 8 Blog

Only for DEV, not for production!

PHP 8.1 + MySQL 8 + Nginx 1.21.6 + XDebug 3.1.2 + Laravel 8 + Adminer

## Setup

See hostnames in the `.env` file.

Add to `/etc/hosts` file lines:
```
127.0.0.1 larablog.test
127.0.0.1 adminer.test
```

```
git clone https://github.com/amberlex78/larablog
cd larablog
cp project/.env.example project/.env
make init
make setup
sudo chown -R $USER:$USER project/
sudo chmod -R 777 project/storage project/bootstrap/cache
```

## Access to site

Front:
```
http://larablog.test
```

Admin:
```
http://larablog.test/backend
```

## Users

```
user@example.com  - User
admin@example.com - Admin
```
Password: `password`
