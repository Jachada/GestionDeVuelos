<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php

    session_start();

    // Comprobamos si ya hay una sesion activa y redireccionamos en caso afirmativo.
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] == "Gestor") {
            header("Location: vuelosGestor.php");
        } else if ($_SESSION['perfil'] != "Gestor") {
            header("Location: vuelosTripulante.php");
        }
    }

    require_once("databaseManager.inc.php");

    $error = "";

    // Comprobamos las credenciales y realizamos la redireccion oportuna.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (login($_POST['username'], $_POST['password'])) {
            $_SESSION['perfil'] = getUser($_POST['username'])['Correspondencia'];

            // Redireccion dependiendo del perfil del usuario logueado.
            if ($_SESSION['perfil'] == "Gestor") {
                header("Location: vuelosGestor.php");
            } else if ($_SESSION['perfil'] != "Gestor") {
                header("Location: vuelosTripulante.php");
            }
        } else {
            $error = "<p style='color:red'>Contraseña incorrecta.</p>";
        }
        
    }

    ?>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <label>Nombre de usuario</label><br>
        <input type="text" name="username" placeholder="Usuario" required/><br>
        <label>Contraseña</label><br>
        <input type="password" name="password" placeholder="Contraseña" required/><br><br>
        <input type="submit" value="Iniciar Sesión">
        <p><?php echo $error?></p>
</body>
</html>