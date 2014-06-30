## kernelp4n1c

Es un sistema para mostrar el repudio de los estudiantes hacia los docentes

Se necesita composer instalado para hacer correr

Por defecto el entorno es 'production', para tener un entorno, por ejemplo 'local' se debe establecer una variable de entorno 'LARAVEL_ENV' o puede ser personalizada en bootstrap/start.php.

Para establecer, en este caso el entorno 'local' se debe editar el fichero bashrc de cierta cuenta o el general del sistema /etc/bash.bashrc y adicionar lo siguiente:

```
export LARAVEL_ENV=local
```

Y finalmente para cargar esta variable de entorno:
```
$ source ~/.bashrc
```
o
```
$ source /etc/bash.bashrc
```

Las configuraciones principales se encuentran en el directorio /app/config. Ahora, si se desean configuraciones propias para el entorno (por ejemplo 'local') se deben copiar estos ficheros al directorio /app/config/local con las configuraciones deseadas para el entorno.

Se tendría la siguiente estructura:

```
+ app
|--+ config
   |-- app.php
   |-- database.php
   |-- ...
   |--+ local
      |-- app.php <--- configuraciones propias de local
      |-- database.php <--- configuraciones propias de local
      |-- ...
```

#### Instalar dependencias
```
$ composer install
```
####

#### Instalar base de datos
```
$ ./artisan migrate --seed
```
####

#### Correr servidor de prueba
```
$ ./artisan serve
```
####

Para saber mejor como funciona todo esto, RTFM -> http://laravel.com/docs


