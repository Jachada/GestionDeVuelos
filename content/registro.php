<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <script src="https://kit.fontawesome.com/aa8be086da.js"></script>
    <link rel="stylesheet" href="../style/bootstrap.min.css"> 
    <link rel="stylesheet" href="../style/style.css">
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
        
        <div class="div-logo"> <li> <a href="../index.php"><img src="../images/logo.png" alt="" class="logo"></a></li></div>
        
        <li class="">
            <a href="login.php"><i class=""></i><span><strong>Login</strong></span></a>
        </li>
        
        
        </ul>
    </nav>
    </header>
    </div> 
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
    <div class="row-12 mt-5">
    <div class="col-12 mb-3">
     <div class="card" >
        
        <div class="card-body">
            <h3 class="card-title">INTRODUZCA LOS DATOS DE REGISTRO</h3>
            <form action=<?php echo htmlentities($_SERVER['PHP_SELF']); ?> method="POST">
                
            <label>Nombre de usuario</label><br>
        <input type="text" name="username" placeholder="Usuario" required/><br>
        <label>Contraseña</label><br>
        <input type="password" name="password" placeholder="Contraseña" required/><br>
        <label>Rol (Gestor o nombre de la compañia)</label><br>
        <input type="text" name="rol" placeholder="Gestor | Iberia | Vueling" required/><br><br>
        <input type="submit" value="Registrar">
        <p><?php echo $error;?>
            
            </form>
        </div>
      </div>
    </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js" ></script>
</body>
</html>
