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
                        <div class="div-logo">
                            <li> <a href="index.php"><img src="../images/logo.png" alt="" class="logo"></a></li>
                        </div>

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

    <br><br>

    <table border=1>
        <thead>
            <tr>
                <th>Ciudad de origen</th>
                <th>Ciudad de destino</th>
                <th>Operadora</th>
                <th>Fecha</th>
                <th>Cantidad de viajeros</th>
            </tr>
        </thead>
        <tbody>
            <?php

            session_start();

            // ESTE USER (SESION) DEBE SER "X EMPRESA/TRIPULACIÓN" PARA VER SUS VUELOS!
            // EL "GESTOR" NO ENTRA

            if (isset($_SESSION['perfil'])) {
                if ($_SESSION['perfil'] != "Gestor") {
                    $companya = $_SESSION['perfil'];

                    $printeaTodo = mostrarPorCompanya($companya);

                    foreach ($printeaTodo as $vuelo) {
                        $varid = $vuelo["id"];
                        echo "<tr>";
                        echo "<td>$vuelo[CiudadOrigen]</td>";
                        echo "<td>$vuelo[CiudadDestino]</td>";
                        echo "<td>$vuelo[Operadora]</td>";
                        echo "<td>$vuelo[Fecha]</td>";
                        echo "<td>$vuelo[CantidadViajeros]</td>";
                        echo "<td><a href='edit.php?id=$varid'>Editar</td>";
                        echo "</tr>";
                    }
                } else {
                    header("Location: login.php");
                }
            } else {
                header("Location: login.php");
            }
            ?>
        </tbody>
    </table>
</body>

</html>
