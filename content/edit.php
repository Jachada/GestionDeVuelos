<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vuelo</title>
    <script src="https://kit.fontawesome.com/aa8be086da.js"></script>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
</head>

<body>


    <div class="container-fluid">
        <div class="row">

            <header class="cabecera col-12 ">
                

                <nav class="menu">
                    <ul class="d-flex d-inline-block justify-content-around align-items-center">
                        <li>
                            <a href="../index.php"><i class=""></i><span><strong>Inicio</strong></span></a>
                        </li>


                        <div class="div-logo">
                            <li> <a href="../index.php"><img src="../images/logo.png" alt="" class="logo"></a></li>
                        </div>

                        <li class="">
                            <a href="cerrarSesion.php"><i class=""></i><span><strong>Cerrar Sesion</strong></span></a>
                        </li>

                        <li class="">
                            <a href="login.php"><i class=""></i><span><strong>Login</strong></span></a>
                        </li>


                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js"></script>





    <?php

    //Incluímos el fichero de funciones
    include 'databaseManager.inc.php';

    //Recojemos el id de la página
    $id = $_GET['id'];

    //Llamamos a la función para recoger los datos de la base de datos y así mostrarlo
    $vuelo = mostrarVueloPorId($id);

    foreach ($vuelo as $atributo => $valor) {

        //Creamos las variables para recojer los datos de la base de datos
        $ciudadOrigenBD = $valor['CiudadOrigen'];
        $ciudadDestinoBD = $valor['CiudadDestino'];
        $operadoraBD = $valor['Operadora'];
        $fechaBD = $valor['Fecha'];
        $cantidadViajerosBD = $valor['CantidadViajeros'];
    }

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST['origen'])) {

            //Almacenamos el error correspondiente para poder mostrarlo
            $errorCiudadOrigen = "No se ha incluído ninguna ciudad de origen para su vuelo";
        } else {

            //Recojemos la Ciudad de Origen
            $ciudadOrigen = $_POST['origen'];

            //Si el formato del dato recogido no es correcto
            if (!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadOrigen)) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCiudadOrigen = "El formato de la ciudad de origen no es correcto solo se pueden usar letras o espacios";
            }
        }

        if (empty($_POST['destino'])) {

            //Almacenamos el error correspondiente para poder mostrarlo
            $errorCiudadDestino = "No se ha incluído ninguna ciudad de destino para su vuelo";
        } else {

            //Recojemos la Ciudad de Destino
            $ciudadDestino = $_POST['destino'];

            //Si el formato del dato recogido no es correcto
            if (!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadDestino)) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCiudadDestino = "El formato de la ciudad de destino no es correcto solo se pueden usar letras o espacios";
            }
        }

        if (empty($_POST['operadora'])) {

            //Almacenamos el error correspondiente para poder mostrarlo
            $errorOperadora = "No se ha incluído ninguna operadora para su vuelo";
        } else {

            //Recojemos la Operadora
            $operadora = $_POST['operadora'];

            if (!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $ciudadDestino)) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorOperadora = "El formato de la operadora no es correcto solo se pueden usar letras o espacios";
            }
        }

        if (empty($_POST['estreno'])) {

            //Almacenamos el error correspondiente para poder mostrarlo
            $errorFecha = "No se ha incluído ninguna fecha para su vuelo";
        } else {

            //Recojemos la Fecha de salida
            $fecha = $_POST['estreno'];

            if (!preg_match("/^(([0][1-9]){1}|([1|2][0-9]){1}|([3][0|1]){1})(\/|\-)(([0][1-9]){1}|([1][0-2]){1})(\/|\-)(([1][9][4-9][0-9]){1}|([2][0][0-4][0-9]){1})$/", $fecha)) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorFecha = "El formato de la fecha no es correcto solo se pueden usar numeros, barras y guiones; adicionalmente el año debe de estar contenido entre 1940 y 2049";
            }
        }

        if (empty($_POST['CantidadViajeros'])) {

            //Almacenamos el error correspondiente para poder mostrarlo
            $errorCantidadViajeros = "No se ha incluído ninguna cantidad de viajeros para su vuelo";
        } else {

            //Recojemos la Cantidad de Viajeros
            $cantidadViajeros = $_POST['CantidadViajeros'];

            if ((int)$cantidadViajeros < 0) {

                //Almacenamos el error correspondiente para mostrarlo
                $errorCantidadViajeros = "La cantidad de viajeros debe de ser al menos 1 viajero";
            }
        }
    }

    //Llamamos a la funcion para editar
    editarVuelo($ciudadOrigen, $ciudadDestino, $operadora, $fecha, $cantidadViajeros, $id);

    ?>

    <div class="row-12 mt-5">
        <div class="col-12 mb-3">
            <div class="card">

                <div class="card-body">
                    <h3 class="card-title">Editar vuelo</h3>
                    <form>
                    <div class="form-group">
                        <label for="origen">Ciudad de origen: </label>
                        <input class="form-control" type="text" name="origen" value="<?php echo $ciudadOrigenBD; ?>" placeholder="Ciudad de origen" />
                        <span style="color:red;"></span>

                        <br><br>

                        <label for="destino">Ciudad de destino: </label>
                        <input class="form-control" type="text" name="destino" value="<?php echo $ciudadDestinoBD; ?>" placeholder="Ciudad de destino" />
                        <span style="color:red;"></span>

                        <br><br>

                        <label for="operadora">Operadora: </label>
                        <input class="form-control" type="text" name="operadora" value="<?php echo $operadoraBD ?>" placeholder="Operadora" />
                        <span style="color:red;"></span>

                        <br><br>

                        <label for="fecha">Fecha del viaje: </label>
                        <input class="form-control" type="date" name="estreno" value="<?php echo $fechaBD; ?>" placeholder="Fecha del viaje">
                        <span style="color:red;"></span>

                        <br><br>

                        <label for="CantidadViajeros">Cantidad de viajeros: </label>
                        <input class="form-control" type="number" name="CantidadViajeros" value="<?php echo $cantidadViajerosBD; ?>" placeholder="Cantidad de viajeros">
                        <span style="color:red;"></span>

                        <br><br>

                        <input class="form-control" type="submit" value="Editar" class="btn-enviar">

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php

    if ($errorCiudadOrigen != "" && $errorCiudadDestino != "" && $errorOperadora != "" && $errorFecha != "" && $errorCantidadViajeros != "") {

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