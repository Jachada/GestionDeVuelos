# GestionDeVuelos


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