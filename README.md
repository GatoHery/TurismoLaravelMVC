# Instalación del proyecto

## Requisitos

Antes de ejecutar el proyecto es necesario tener instalado:

* PHP 8.2 o superior.
* Composer.

## Pasos para ejecutar el proyecto

### 1. Clonar el repositorio

```bash
git clone https://github.com/USUARIO/NOMBRE_REPOSITORIO.git
```

O bien descargar el proyecto como archivo ZIP desde GitHub y extraer su contenido.

### 2. Acceder a la carpeta del proyecto

```bash
cd TurismoLaravelMVC
```

### 3. Instalar las dependencias

Ejecutar:

```bash
composer install
```

Este comando descargará todas las dependencias necesarias de Laravel.


### 4. Ejecutar el servidor de desarrollo

```bash
php artisan serve
```

El proyecto estará disponible en:

```
http://127.0.0.1:8000
```

## Fuente de datos

El proyecto no utiliza una base de datos relacional. Toda la información se almacena en archivos JSON ubicados en:

```
app/data/
```

Los archivos utilizados son:

* `lugares.json`: almacena los lugares turísticos.
* `contactos.json`: almacena las solicitudes enviadas desde el formulario de contacto.
