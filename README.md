# GestionDeVuelos
* Gestión de Vuelos es un programa el cuál consta con un Login y Registro de usuarios(sólo accesible a usuarios con un rol específico), el cuál mostrará todos los vuelos almacenados en una base de datos. Dependiendo de su rol, se mostrará los datos de la tabla de tal forma que podán ser editados o no. Nuestro programa tambíen contiene un filter, el cuál te permite ver los vuelos por compañia o destino.
## FUNCIONABILIDAD DEL PROGRAMA:
* 1. Sistema de login.
     * Función login.php y registro.php
      * Se almacenará:
       * Nombre de usuario.
       * Contraseña.
       * Correspondencia. (En este campo se almacena si es un gestor del aeropuerto o la compañía de la que es tripulante el usuario).   
* 2.Almacenaje de los datos en una base de datos denominada “aeropuertos”.
     * Se almacenará:
      * Ciudad de origen.
      * Ciudad de destino.
      * Operadora.
      * Fecha.
      * Cantidad de viajeros.

## Organización:
### FRONT:
* index.php:
  * **Samu:** Crear formulario para elegir ciudad y origen o destino y crear tabla para mostrar los vuelos
* login.php:
  * **Samu:** Formulario de acceso que pida usuario y contraseña
* vuelosGestor.php:
  * **Manu:** Crear tabla para mostrar los vuelos
* create.php:
  * **Manu:** Crear formulario para añadir un vuelo nuevo en la base de datos
* vuelosTripulante.php
  * **Marina:** Crear tabla para mostrar los vuelos
* edit.php:
  * **Marina:** Crear formulario para editar un vuelo nuevo en la base de datos
* Se ha añadido también el botón de borrar vuelos y un botón para crear un nuevo vuelo.
* CSS **(Samu, Marina, Manu)**
### BACK:
* database.Manager.inc.php
  * MostrarTodo **(Antonio)**
  * MostrarPorOrigen **(Antonio)**
  * MostrarPorDestino **(Antonio)**
  * MostrarPorCompanya **(Antonio)**
  * CrearVuelo **(David)**
  * EditarVuelo **(Pablo)**
* index.php:
  * **David:** Aplicar función MostrarPorOrigen o MostrarPorDestino según elecciones del formulario
* login.php:
  * **Pablo:** Aplicar validación a usuario y contraseña 
* vuelosGestor.php:
  * **David:** Aplicar función MostrarTodo
* create.php:
  * **Pablo:** Coger datos seguros y aplicar función CrearVuelo
* vuelosTripulante.php
  * **David:** Aplicar función MostrarPorCompanya
* edit.php:
  * **Pablo:** Coger datos seguros y aplicar función EditarVuelo
* registro.php:
  * Realizar el formulario de registro del Usuario 

* Se ha añadido también la funcionabilidad del botón de borrar vuelos y del botón para crear un nuevo vuelo.
