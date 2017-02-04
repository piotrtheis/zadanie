## Installation guide

### Via docker

```
$ cp .env.dist .env
```

##### Starting/building environment
```
$ docker-compose up -d
```

##### Composer

```
$ docker exec -it php composer install
```
DB param's for db container
```
   database_host: mysqldb
   database_port: null
   database_name: sf
   database_user: root
   database_password: root
```

##### DB schema, data fixtures
```
$ docker exec -it php bin/console doctrine:schema:update --force
$ docker exec -it php bin/console doctrine:fixtures:load
```

##### Container ip
 ```
$ docker inspect --format '{{ .NetworkSettings.IPAddress }}' server
```

##### Notifier tests
```
$ vendor/bin/phpunit src/Tysdever/NotifierBundle 
```