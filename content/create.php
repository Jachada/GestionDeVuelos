<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css"> 
    <link rel="stylesheet" href="../style/style.css">
    <title>CREAR VUELO</title>
    <style> p{ color: red;}</style>
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
              
             
              <div class="div-logo"> <li> <a href="index.php"><img src="../images/logo.png" alt="" class="logo"></a></li></div>
             
              <li class="">
                  <a href="cerrarSesion.php"><i class=""></i><span><strong>Cerrar Sesion</strong></span></a>
              </li>

              <li class="">
                <a href="registro.php"><i class=""></i><span><strong>Registro</strong></span></a>
              </li>
              
            </ul>
          </nav>
        </header>
      </div>
      
      
    </div>

    <?php
    include "databaseManager.inc.php";
    if (isset($_SESSION['perfil'])) {
      if ($_SESSION['perfil'] != "Gestor") {
          header("Location: login.php");
      }
    }

        $mensajeError = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $origen = filtrado($_POST['origen']);
            $destino = filtrado($_POST['destino']);
            $operadora = filtrado($_POST['operadora']);
            $fecha = filtrado($_POST['fecha']);
            $cantidad_viajeros = filtrado($_POST['cantidad']);
      

            if (crearVuelo($origen, $destino, $operadora, $fecha, $cantidad_viajeros)==true){
                
            }
            else{
               $mensajeError =  "<p>* Conexión fallida. Prueba de nuevo.</p>"; 
            }
        }
        function filtrado($datos){
            $datos = trim($datos); //Elimina espacios antes y después de los datos
            $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
            return $datos;
        }
      
    ?>


<div class="row-12 mt-5">
        <div class="col-12 mb-3">
         <div class="card" >
            
            <div class="card-body">
                <h3 class="card-title">Nuevo:</h3>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="form-register">

            <h2 class="form-titulo">Introducir datos:</h2>
            <div class="contenedor-inputs">
                
                <input type="text" name="origen" placeholder="Origen" class="input-100" required>
                <input type="text" name="destino" placeholder="Destino" class="input-100" required>
                <input type="text" name="operadora" placeholder="Operadora" class="input-48" required>
                <input type="date" name="fecha" placeholder="Fecha" class="input-100" required>
                <input type="text" name="cantidad" placeholder="Cantidad de pasajeros" class="input-48"required >
                
                <input type="submit" value="Registrar" class="btn-enviar">
                <span style="color:red"><?php echo $mensajeError?></span>
            <div id="errores"></div>
            </div>
        </form>
            </div>
          </div>
        </div>
    </div>

        
</body>
</html>