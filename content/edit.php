<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vuelo</title>
</head>

<body>

    <?php

        //Incluímos el fichero de funciones
        include 'databaseManager.inc.php';

        //Recojemos el id de la página
        $id = $_GET['id'];

        //Creamos las variables para recojer los datos del formulario
        $ciudadOrigen = "";
        $ciudadDestino = "";
        $operadora = "";
        $fecha = "";
        $cantidadViajeros = 0;

        //Creamos las variables para mostrar los errores en la edicion de vuelos
        $errorCiudadOrigen = "";
        $errorCiudadDestino = "";
        $errorOperadora = "";
        $errorFecha = "";
        $errorCantidadViajeros = "";

        //Si recojemos datos del formulario
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST['origen'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCiudadOrigen = "No se ha incluído ninguna ciudad de origen para su vuelo";

            } else {

                //Recojemos la Ciudad de Origen
                $ciudadOrigen = $_POST['origen'];

                //Si el formato del dato recogido no es correcto
                if(!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadOrigen)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorCiudadOrigen = "El formato de la ciudad de origen no es correcto solo se pueden usar letras o espacios";

                }

            }

            if(empty($_POST['destino'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCiudadDestino = "No se ha incluído ninguna ciudad de destino para su vuelo";

            } else {

                //Recojemos la Ciudad de Destino
                $ciudadDestino = $_POST['destino'];

                //Si el formato del dato recogido no es correcto
                if(!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadDestino)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorCiudadDestino = "El formato de la ciudad de destino no es correcto solo se pueden usar letras o espacios";

                }

            }

            if(empty($_POST['operadora'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorOperadora = "No se ha incluído ninguna operadora para su vuelo";

            } else {

                //Recojemos la Operadora
                $operadora = $_POST['operadora'];

                if(!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadDestino)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorOperadora = "El formato de la operadora no es correcto solo se pueden usar letras o espacios";

                }

            }

            if(empty($_POST['estreno'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorFecha = "No se ha incluído ninguna fecha para su vuelo";

            } else {

                //Recojemos la Fecha de salida
                $fecha = $_POST['estreno'];

                if(!preg_match("/^(([0][1-9]){1}|([1|2][0-9]){1}|([3][0|1]){1})(\/|\-)(([0][1-9]){1}|([1][0-2]){1})(\/|\-)(([1][9][4-9][0-9]){1}|([2][0][0-4][0-9]){1})$/", $fecha)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorFecha = "El formato de la fecha no es correcto solo se pueden usar numeros, barras y guiones; adicionalmente el año debe de estar contenido entre 1940 y 2049";

                }

            }

            if(empty($_POST['CantidadViajeros'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCantidadViajeros = "No se ha incluído ninguna cantidad de viajeros para su vuelo";

            } else {

                //Recojemos la Cantidad de Viajeros
                $cantidadViajeros = $_POST['CantidadViajeros'];

                if((int)$cantidadViajeros < 0) {

                    //Almacenamos el error correspondiente para mostrarlo
                    $errorCantidadViajeros = "La cantidad de viajeros debe de ser al menos 1 viajero";

                }

            }

        }

        //Llamamos a la funcion para editar
        editarVuelo($ciudadOrigen, $ciudadDestino, $operadora, $fecha, $cantidadViajeros, $id);

    ?>

    <form>

        <label for="origen">Ciudad de origen: </label>
        <input type="text" name="origen" value="<?php ?>" placeholder="Ciudad de origen"/>
        <span style="color:red;"></span>

        <br>

        <label for="destino">Ciudad de destino: </label>
        <input type="text" name="destino" value="<?php ?>" placeholder="Ciudad de destino"/>
        <span style="color:red;"></span>

        <br>

        <label for="operadora">Operadora: </label>
        <input type="text" name="operadora" value="<?php ?>" placeholder="Operadora"/>
        <span style="color:red;"></span>

        <br>

        <label for="fecha">Fecha del viaje: </label>
        <input type="date" name="estreno" value="<?php ?>" placeholder="Fecha del viaje">
        <span style="color:red;"></span>

        <br>

        <label for="CantidadViajeros">Cantidad de viajeros: </label>
        <input type="number" name="CantidadViajeros" value="<?php ?>" placeholder="Cantidad de viajeros">
        <span style="color:red;"></span>

        <br>

        <input type="submit" value="Editar" class="btn-enviar">

    </form>

    <div>
        <?php

            if($errorCiudadOrigen != "" && $errorCiudadDestino != "" && $errorOperadora != "" && $errorFecha != "" && $errorCantidadViajeros != "") {

                echo $errorCiudadOrigen;
                echo "<br>";
                echo $errorCiudadDestino;
                echo "<br>";
                echo $errorOperadora;
                echo "<br>";
                echo $errorFecha;
                echo "<br>";
                echo $errorCantidadViajeros;
                echo "<br>";

            }

        ?>
    </div>

</body>

</html>