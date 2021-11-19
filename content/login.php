<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        //Incluímos el fichero de funciones
        include 'databaseManager.inc.php';

        //Creamos las variables para recojer los datos del formulario
        $username = "";
        $password = "";

        //Creamos las variables para mostrar los errores en el login
        $errorUsername = "";
        $errorPassword = "";

        //Si recojemos datos del formulario
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            if(empty($_POST['user'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorUsername = "No se ha incluído ningún usuario para logearse";

            } else {

                //Recojemos la Ciudad de Origen
                $username = $_POST['user'];

                //Si el formato del dato recogido no es correcto
                if(!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $username)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorUsername = "El formato de la ciudad de origen no es correcto solo se pueden usar letras o espacios";

                }

            }

            if(empty($_POST['password'])) {

                //Almacenamos el error correspondiente para poder mostrarlo
                $errorCiudadDestino = "No se ha incluído ninguna password para logearse";

            } else {

                //Recojemos la Ciudad de Destino
                $password = $_POST['password'];

                //Si el formato del dato recogido no es correcto
                if(!preg_match("/^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/", $password)) {

                    //Almacenamos el error correspondiente para poder mostrarlo
                    $errorCiudadDestino = "El formato de la ciudad de destino no es correcto solo se pueden usar letras o espacios";

                }

            }

        }

    ?>
    
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <label>Nombre de usuario</label> 
        <br>
        <input type="text" name="user" placeholder="username" required/>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="password" placeholder="password" required/>
        <br>
        <input type="submit" value="Sign up">
    </form>

</body>
</html>