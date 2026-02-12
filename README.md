# Art Gallery API

Este es un proyecto simple para gestionar una galería de arte. Está hecho con Laravel 11 y permite administrar obras de arte y usuarios.

## Cosas que incluye

*   **API REST**: Endpoints para ver, crear, editar y borrar obras de arte.
*   **Autenticación**: Usa Laravel Sanctum (registro y login).
*   **Roles**: Un middleware simple para verificar si un usuario es admin.
*   **Postman**: He dejado un archivo `postman_collection.json` en la raíz para importar y probar rápido.

## Cómo echarlo a andar

1.  Clona el repo.
2.  Instala las dependencias:
    ```bash
    composer install
    ```
3.  Copia el archivo de entorno:
    ```bash
    cp .env.example .env
    ```
4.  Genera la clave de la app:
    ```bash
    php artisan key:generate
    ```
5.  Crea la base de datos (asegúrate de configurar el `.env` primero) y corre las migraciones:
    ```bash
    php artisan migrate
    ```
6.  Levanta el servidor:
    ```bash
    php artisan serve
    ```

## Endpoints principales

*   `POST /api/register` - Crear cuenta
*   `POST /api/login` - Iniciar sesión (te devuelve el token)
*   `GET /api/artworks` - Ver todas las obras
*   `POST /api/artworks` - Crear una obra (necesitas token)
*   `DELETE /api/artworks/{id}` - Borrar obra (necesitas ser admin)

Y eso es todo. Si algo falla, revisa los logs de Laravel.
