<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VUELOS TRIPULANTE</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <?php
    include "databaseManager.inc.php";
    ?>
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

                        <li class="">
                            <a href="acercade.php"><i class=""></i><span><strong>Acerca de</strong></span></a>
                        </li>
                        <div class="div-logo">
                            <li> <a href="index.php"><img src="../images/logo.png" alt="" class="logo"></a></li>
                        </div>

                        <li class="">
                            <a href="login.php"><i class=""></i><span><strong>Login</strong></span></a>
                        </li>

                        <li class="">
                            <a href="cerrarSesion.php"><i class=""></i><span><strong>Cerrar Sesion</strong></span></a>
                        </li>

                        <li class="">
                            <a href="./content/registro.php"><i class=""></i><span><strong>Registro</strong></span></a>
                        </li>

                    </ul>
                </nav>
            </header>
        </div>


    </div>

    <br><br>
    <div class="row-12 mt-5">
        <div class="col-12 mb-3">
        <section class="card ">
            <header class="card-header">
            
            <h2 class="card-title">Vuelos</h2>
            </header>
            <div class="card-body" >
            <table class="table table-bordered table-striped table-sm mb-0">
                <thead>
                <tr>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Operadora</th>
                    <th>Fecha</th>
                    <th>Numero Viajeros</th>
                    <th>Editar</th>
                </tr>
                </thead>
                <tbody>
                <?php      
            $companya = "Vueling";
            $printeaTodo = mostrarPorCompanya($companya);

            foreach ($printeaTodo as $vuelo) {
            $varid = $vuelo["id"];
            echo "<tr>";
            echo "<td class='align-middle'>$vuelo[CiudadOrigen]</td>";
            echo "<td class='align-middle'>$vuelo[CiudadDestino]</td>";
            echo "<td class='align-middle'>$vuelo[Operadora]</td>";
            echo "<td class='align-middle'>$vuelo[Fecha]</td>";
            echo "<td class='align-middle'>$vuelo[CantidadViajeros]</td>";
            echo "<td class='align-middle'><a   href='edit.php?id=$varid' class='btn btn-lg btn-success boton'><i class='fas fa-edit'></i></a></td>";
            echo "</tr>";

            }
            ?>
                
                </tbody>
            </table>
            </div>
        </section>
        </div>
    </div>
   
    
</body>

</html>
