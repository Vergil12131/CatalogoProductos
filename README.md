## Sistema de Gestión de Productos

Aplicación CRUD desarrollada con Laravel para la gestión de productos.  
Incluye creación, edición, visualización y eliminación lógica mediante SoftDeletes.

-----

## Tecnologías Utilizadas

- PHP 8.4.0
- Composer 2.8.9
- Laravel Framework 12.53.0
- Base de datos (MySQL)
- git version 2.49.0.windows.1 (necesario para subir archivos y clonar repositorio)


-----


## Requisitos Previos

Antes de ejecutar el proyecto asegúrate de tener instalado:

- PHP >= 8.4
- Composer >= 2.x
- Servidor de base de datos (MySQL recomendado)
- Extensiones de PHP necesarias:
  - OpenSSL
  - PDO
  - Mbstring
  - Tokenizer
  - XML
  - Ctype
  - JSON

En caso de necesitar verificar la version instalada de php, composer o Laravel, ejecutar en consola:

- PHP: 
```
  php -v
```

- Composer:
```
  composer -v
```

- Laravel (dentro de proyecto):
```
  php artisan -v
```

- Git:
```
  git --version
```

-----


## Instalación

En primer lugar se clona el repositorio con los siguientes comandos en consola:
```
  cd ubicacionProyecto
  git clone <https://github.com/Vergil12131/CatalogoProductos.git >
```

Se procede a instalar las dependencias utilizando:
```
  composer install
```

Copiamos el archivo example.env:
```
  cp .env.example .env
```

Dentro del nuevo archivo (".env"), configuramos la información de la base de datos:
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nombre_bd
  DB_USERNAME=usuario
  DB_PASSWORD=contraseña

Generamos clave de aplicacion:
```
  php artisan key:generate
```

Ejecutamos la migración:
```
  php artisan migrate
```


-----


## Ejecución


Se utiliza el siguiente comando:
```
  php artisan serve
```

La aplicación estará disponible accediendo a http://127.0.0.1:8000