# Documentación general del proyecto

## Requisitos
- Debe tener composer instalado.
- Debe tener xampp instalado (La guía estará enfocada en dicho paquete)

> Si no cumple alguno de los requisitos, no se preocupe, al final del README encontrará una guía para cada uno de los puntos anteriores.

### Instalar el proyecto
1. En la carpeta del paquete de xampp en el directorio **xampp/htdocs**, cree una carpeta llamada **paginasPHP**.
2. Clone este repositorio y ubíquelo dentro de la carpeta **paginasPHP**.
   -  Puede usar la herramienta que guste para clonar, solo recuerde que debe quedar con el nombre de la carpeta, debe quedar como **SistemasOperativos** (Así como se llama el repositorio).
3. Abra dos terminales, en una ubíquese en el directorio donde está **ServiceWebApp** y en la otra el **ClientWebApp**.
4. En cada una de las terminales, ejecute la serie de comandos:
    - `composer install`
    - `cp .env.example .env`
    - `php artisan key:generate`

5. Crear una base de datos con el nombre de "Laravel".
   - En caso de asignarle una contraseña al usuario root o a la base de datos en sí, debe modificar el archivo *.env* para las credenciales de la misma. Los atributos que deberá modificar en el archivo son: *DB_USERNAME* y *DB_PASSWORD*. Puede abrir y editar el archivo con el editor de texto plano de su preferencia
6. En la terminal del **ServiceWebApp** ejecutar los comandos:
   - `php artisan migrate`
   - `php artisan db:seed`
7. Para probar que el **ClientWebApp** sirve, deberá poner en su navegador, [click aquí](http://localhost/paginasPHP/ServiciosWeb/Corte_1/Desafio/ClientWebApp/public/)
