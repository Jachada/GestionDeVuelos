<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VUELOS GESTOR</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css"> 
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
<div class="container-fluid">
      <div class="row">

        <header class="cabecera col-12 ">
          <div class="menu_bar d-flex justify-content-center align-content-center">
            <a href="#" class="bt-menu"><img src="../images/logo.png" alt="" class=""><i class="fas fa-bars"></i></a>
          </div>
       
          <nav class="menu">
            <ul class="d-flex d-inline-block justify-content-around align-items-center">
              <li>
                <a href="../index.php"><i class=""></i><span><strong>Inicio</strong></span></a>
              </li>
              
              <li class="">
                <a href="acercade.php"><i class=""></i><span><strong>Acerca de</strong></span></a>
              </li>
              <div class="div-logo"> <li> <a href="index.php"><img src="../images/logo.png" alt="" class="logo"></a></li></div>
             
              <li class="">
                <a href="login.php"><i class=""></i><span><strong>Login</strong></span></a>
              </li>
              <li class="">
                <a href="./content/registro.php"><i class=""></i><span><strong>Registro</strong></span></a>
              </li>
              
            </ul>
          </nav>
        </header>
      </div>
      
      
    </div>
    <table border=1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Operadora</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>View</th>
                <th>Edit</th>
                <th>Borrar</th>
           </tr>
        </thead>
        <tbody>
        
        <?php
        include  'databaseManager.inc.php';
            $arrayconvuelos = mostrarVuelos();
         
            echo "</br>";
            echo "</br>";

            //RECORRIDO DE ARRAY PARA GENERAR VALORES EN LA TABLA 
            foreach ( $arrayconvuelos as $vuelo ):
                ?>
                <tr>
           
                        <td><?php echo $vuelo['id'];?></td>
                        <td><?php echo $vuelo['CiudadOrigen'];?></td>
                        <td><?php echo $vuelo['CiudadDestino'];?></td>
                        <td><?php echo $vuelo['Operadora'];?></td>
                        <td><?php echo $vuelo['Fecha'];?></td>
                        <td><?php echo $vuelo['CantidadViajeros'];?></td>
              
                <td><a href="delete.php?id=<?php echo $vuelo['id']?>">borrar</a></td>
                </tr>
            <?php
            endforeach;

            ?>
        </tbody>
    </table>
        </tbody>
    </table>
</body>
</html>