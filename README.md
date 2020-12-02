# docker-laravel

## Introduction

Build a simple laravel development environment with docker-compose.

## Container structure

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php): 7.4-fpm-buster
  - [composer](https://hub.docker.com/_/composer): 1.10

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx): 1.18-alpine

### db container

- Base image
  - [mysql](https://hub.docker.com/_/mysql): 8.0



## Create container environment (First time)

```bash
# Clone docker-laravel repository
$ git clone git@github.com:eito0201/docker-laravel.git

# Move to project directory
$ cd docker-laravel

# Execute docker-compose up
$ docker-compose up -d --build

# Install laravel
$ docker-compose exec app bash
[app] $ composer install

# Create .env file
[app] $ cp .env.example .env

# Generate app key
[app] $ php artisan key:generate

# Execute migration
[app] $ php artisan migrate

```
↓ Visit a page \
http://127.0.0.1:10080

```bash
# Execute docker-compose down
[app] $ exit
$ docker-compose down
```

## Start-up container

```bash
# Execute docker-compose up
$ docker-compose up -d --build
```

↓ Visit a page \
http://127.0.0.1:10080

## Stop and remove container

```bash
# Execute docker-compose down
$ docker-compose down
```

## Destroy container environment

```bash
# Delete containers, images, volumes, networks and etc... at once
$ docker-compose down --rmi all --volumes --remove-orphans
```
