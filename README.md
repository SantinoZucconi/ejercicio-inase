# Ejercicio INASE

Aplicación desarrollada con **CakePHP** para la gestión de muestras y resultados de análisis de semillas.


## Requisitos previos

- **PHP >= 8.1**
- **MySQL**


## Instalación

### 1. Clonar el repositorio

```
git clone https://github.com/SantinoZucconi/ejercicio-inase.git
cd ejercicio-inase
```

### 2. Configurar variables de entorno

Las variables de entorno se deben configurar en config/.env

```
APP_NAME="__APP_NAME__"
DEBUG="true"
APP_ENCODING="UTF-8"
APP_DEFAULT_LOCALE="en_US"
APP_DEFAULT_TIMEZONE="UTC"
SECURITY_SALT="__SALT__"

DB_USER=tu_usuario
DB_PASSWORD=tu_contraseña
DB_NAME=nombre_db
DB_HOST=nombre_host
```

### 3. Ejecutar migraciones

```
bin/cake migrations migrate
```

## Inicialización de la aplicación

```
bin/cake server # puerto 8765 por default
```
