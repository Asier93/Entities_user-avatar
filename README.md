# Proyecto Symfony - Gestión de Usuarios y Avatares

Este proyecto Symfony se centra en la gestión de usuarios y la asociación de avatares a los mismos mediante relaciones entre tablas.

## Requisitos

- PHP >= 8.1
- Extensiones PHP: ctype, iconv
- Symfony 6.4
- Composer para la gestión de dependencias

## Instalación

1. **Clonar el repositorio:**

   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd nombre-del-proyecto

Instalar dependencias:
composer install

Configuración de variables de entorno:
Copiar el archivo .env.example y renombrarlo a .env.
Configurar las variables de entorno necesarias, especialmente la conexión a la base de datos.

Crear la base de datos:
php bin/console doctrine:database:create

Aplicar migraciones:
php bin/console doctrine:migrations:migrate

Iniciar el servidor local:
symfony server:start

Acceder a la aplicación:
Abre tu navegador web y visita https://localhost:8000.

Uso
Registro de Usuarios: Implementa un formulario para registrar nuevos usuarios.
Asignación de Avatares: Permite a los usuarios seleccionar o subir sus avatares.
Gestión de Relaciones: Utiliza Doctrine para gestionar las relaciones entre tablas de usuarios y avatares.

Tests
Para ejecutar los tests unitarios:
php bin/phpunit

Contribución
Contribuciones son bienvenidas. Por favor, abre un issue para reportar problemas o sugerir nuevas funcionalidades.
