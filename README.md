
# Administrador de Tareas

Este es un sistema simple para administrar tareas, creado como ejercicio de un CRUD en PHP. Para este ejercicio se utilizó MVC como patrón de diseño para el desarrollo.




## Instalación

La instalación y uso de este sistema es muy simple, a continuación se enlistan los requisitos.

### Pre-requisitos

Es necesario contar con un servidor, local o remoto, con soporte para PHP. Éste proyecto en específico se creó utilizando Laragon como servidor de desarrollo.

De igual modo se debe contar con el soporte necesario para utilizar bases de datos MySql.

### Instalación

Se deberá clonar o descargar el proyecto y colocar los archivos contenidos en éste dentro de una carpeta en el "document root" o "web root" (por ejemplo C:\laragon\www\admin_tareas o C:\xampp\htdocs\admin_tareas).

El archivo .htaccess incluido en este proyecto contiene la configuración necesaria para que en Apache se logren utilizar las rutas sin necesidad de un ".php" al final de cada una de ellas.

También se incluye el archivo Base.sql en el que se encuentran los querys necesarios para crear una base de datos de MySql llamada "tasks" y una tabla con el mismo nombre.

Dentro del proyecto, en el archivo (proyecto)/modelos/db.php se encuantran las variables que se deberán actualizar con los datos correspondientes de acceso a la base de datos que se ha creado.

```
private static $host = 'localhost'; 
private static $port = '3306'; 
private static $dbname = 'tasks'; 
private static $user = 'root'; 
private static $pass = 'root';
```

Una vez instalado, se podrán crear tareas por medio de los botones asignados para esto, de igual modo se podrán editar y eliminar ya que han sido desplegadas.

## Tecnologías utilizadas

Para el desarollo de este proyecto se ha utilizado:

* HTML
* CSS
* JavaScript
* Ajax
* PHP (v. 8.1.10)
* MySql (v. 5.7.33)

Como librerías adicionales se utilizó:

* Font Awesome (v. 6.7.2)
* jQuery (v. 3.7.1)

## Ejecución del proyecto

Una vez instalado el proyecto, únicamente se deberá acceder a la ruta en donde se colocó por medio del navegador preferido.

Por ejemplo, si se colocó en un localhost (en mi caso C:\laragon\www\admin_tareas) se deberá acceder como: http://localhost/admin_tareas/

## Autor

* **Carlos Martin** - *Programador PHP* - [carlosmartindev](https://github.com/carlosmartindev)
