Symfony4 Dojo
=============

Un simple Dojo levantado con Symfony4 y php7.2. Incluye phpUnit y un pequeño test de ejemplo y un comando para ejecutar. 

Update: Añadido también phpspec :)

Sólo necesitas docker y todas las dependencias se ejecutarán dentro del container sin instalar nada en tu máquina.

## Levantemos esto:

### Instalar docker 
https://www.docker.com/community-edition

### Levantar docker:

```$ docker-compose up -d --build```

### Hacer composer install:
```$ docker exec -it symfony4-dojo_php_1 composer install```

### Tirar los tests phpunit (La primera vez debe instalar cosas)

```$ docker exec -it symfony4-dojo_php_1 bin/phpunit```

### Tirar los tests phpspec
```$ docker exec -it symfony4-dojo_php_1 bin/phpspec run```

### Apagar los contendores
```$ docker-compose down```

### Entrar dentro del container
Si lo prefieres, puedes ejecutar este comando para estar dentro del container directamente en el workdir y podrás ejecutar cualquier cosa como si estuvieras en tu máquina.

```$ docker exec -it symfony4-dojo_php_1 bash```

