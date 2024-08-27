
# CRUD - Laravel & Livewire

CRUD de un producto hecho en Laravel 11 y Livewire 3
Made by Gabriel Ravelo


## Tecnologías Usadas

**PHP:** 8.3.2

**Node:** 20.11

**Livewire:** 3


## Instalar el Proyecto
Pasos para instalar el proyecto

```bash
  git clone git@github.com:gabrielravelo/crud-laravel-livewire.git
```

```bash
  cd crud-laravel-livewire
``` 

```bash
  composer i && npm i
``` 

```bash
  cp .env.example .env
``` 
Luego de copiar el .env, configurar la base de datos para correr las migraciones

```bash
  php artisan key:generate
``` 

```bash
  php artisan migrate --seed
``` 

```bash
  php artisan serve
``` 

En otra terminal:

```bash
  npm run dev
``` 

Con esto el proyecto estará corriendo de manera correcta.