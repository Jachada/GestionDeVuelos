<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo usuario</title>
</head>
<body>
    <?php

    session_start();

    // Si el usuario no es Gestor volverá a la pantalla de login, en caso de estar logueado será redireccionado según su Correspondencia.
    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] != "Gestor") {
            header("Location: login.php");
        }
    }

    require_once("databaseManager.inc.php");

    $error = "";

    // Comprobamos si el usuario se ha registrado correctamente y mostramos un mensaje.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (register($_POST['username'], $_POST['password'], $_POST['rol'])) {
            $error = "<p style='color:green'>Usuario registrado correctamente.</p>";
        } else {
            $error = "<p style='color:red'>El usuario ya existe.</p>";
        }
        
    }

    ?>
    <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
        <label>Nombre de usuario</label><br>
        <input type="text" name="username" placeholder="Usuario" required/><br>
        <label>Contraseña</label><br>
        <input type="password" name="password" placeholder="Contraseña" required/><br>
        <label>Rol (Gestor o nombre de la compañia)</label><br>
        <input type="text" name="rol" placeholder="Gestor | Iberia | Vueling" required/><br><br>
        <input type="submit" value="Registrar">
        <p><?php echo $error;?></p>
</body>
</html>