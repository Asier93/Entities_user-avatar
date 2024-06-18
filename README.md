# Proyecto Symfony - Gestión de usuarios y avatares

Este proyecto Symfony se centra en la gestión de usuarios y la asociación de avatares a los mismos mediante relaciones entre tablas.

## Requisitos

- PHP >= 8.1
- Extensiones PHP: ctype, iconv
- Symfony 6.4
- Composer para la gestión de dependencias

## Uso
Registro de usuarios: Implementa un formulario para registrar, editar o eliminar nuevos usuarios.
Asignación de avatares: Implementa un formularrio para registrar, editar o eliminar nuevos avatares relacionados al usuario.
Gestión de relaciones: Utiliza Doctrine para gestionar las relaciones entre tablas de usuarios y avatares.

## Instalación

1. **Clonar el repositorio:**

   ```bash
   git clone <URL_DEL_REPOSITORIO>
   cd nombre-del-proyecto

2. **Instalar dependencias**:
composer install

3. **Configuración de variables de entorno**:
Copiar el archivo .env.example y renombrarlo a .env.
Configurar las variables de entorno necesarias, especialmente la conexión a la base de datos.

4. **Crear la base de datos**:
php bin/console doctrine:database:create

5. **Aplicar migraciones**:
php bin/console doctrine:migrations:migrate

6. **Iniciar el servidor local**:
symfony server:start

7. **Acceder a la aplicación**:
Abre tu navegador web y visita https://localhost:8000.

8. **Tests**
Para ejecutar los tests unitarios:
php bin/phpunit

## Contribución
Contribuciones son bienvenidas. Por favor, abre un issue para reportar problemas o sugerir nuevas funcionalidades.
