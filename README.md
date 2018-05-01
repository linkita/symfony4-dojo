Symfony4 Dojo
=============

Un simple Dojo levantado con Symfony4 y php7.2. Incluye phpUnit y un pequeño test de ejemplo y un comando para ejecutar. 

Sólo necesitas docker y todas las dependencias se ejecutarán dentro del container sin instalar nada en tu máquina.

## Levantemos esto:

### Instalar docker 
https://www.docker.com/community-edition

### Levantar docker:

```$ docker-compose up -d --build```

### Hacer composer install:
```$ docker exec -it symfony4dojo_php_1 composer install -d /var/www/dojo```

La demo está incompleta y no tiene infrastructura (por ahora) . Con lo cual no tiene funcionalidad fuera de lanzar los tests unitarios.


### Tirar los tests (esto sí que va :) )

```$ docker exec -it symfony4dojo_php_1 bin/phpunit -d /var/www/dojo```

### Apagar los contendores
```$ docker-compose down```

### Entrar dentro del container
```$ docker exec -it symfony4dojo_php_1 bash```

Si lo prefieres, puedes ejecutar este comando para estar dentro del container directamente en el workdir y podrás ejecutar cualquier cosa como si estuvieras en tu máquina.
