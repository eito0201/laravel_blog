# laravel_blog

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

## Execute container commands

```bash
$ docker-compose exec ${CONTAINER_NAME} bash
```

## Connection for MySQL

```bash
$ docker-compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
```