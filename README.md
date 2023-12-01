## Bonus Rede



### Executar pelo docker

![Docker Version Support](https://img.shields.io/badge/docker-23%2B-brightgreen.svg?style=flat-square)
![Docker Compose Version Support](https://img.shields.io/badge/dockercompose-2.17%2B-brightgreen.svg?style=flat-square)

execute os seguintes comando na raiz do projeto

```
docker compose up -d
```

depois do container ativo, execute

```
 docker exec -it bonus-rede-ws /bin/bash
```

execute dentro do container o comando, alterando o 150.26 que é um valor exemplo

```
php artisan run:network --value=150.26
```

-----

### Executar por comando

![PHP Version Support](https://img.shields.io/badge/php-8.2%2B-brightgreen.svg?style=flat-square) ![Composer Version Support](https://img.shields.io/badge/composer-2.2.9%2B-brightgreen.svg?style=flat-square)

execute o seguintes comando na raiz do projeto

```
composer install
```

execute o comando, alterando o 150.26 que é um valor exemplo

```
php artisan run:network --value=150.26
```
