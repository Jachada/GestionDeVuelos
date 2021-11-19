<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VUELOS GESTOR</title>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <style>
        table,
        th,
        td {
            margin: auto;
            border: 1px solid black;
            border-collapse: collapse;
            background-color: lightgray;
            text-align: center;


        }

        td {
            padding: 12px;
        }

        body {
            color: black;
        }
    </style>
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


                        <div class="div-logo">
                            <li> <a href="index.php"><img src="../images/logo.png" alt="" class="logo"></a></li>
                        </div>


                        <li class="">
                            <a href="./content/registro.php"><i class=""></i><span><strong>Registro</strong></span></a>
                        </li>

                    </ul>
                </nav>
            </header>
        </div>


    </div>
    <table border=1 fopnt-color=black>
        <thead>
            <tr>
                <th>Id</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Operadora</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Edit</th>
                <th>Delete</th>


            </tr>
        </thead>
        <tbody>

            <?php
            include  'databaseManager.inc.php';

            // ESTE USER (SESION) DEBE SER "GESTOR" PARA VER LA TABLA ENTERA!

            session_start();
            if (isset($_SESSION['perfil'])) {
                if ($_SESSION['perfil'] == "Gestor") {

                    $arrayconvuelos = mostrarVuelos();

                    echo "</br>";
                    echo "</br>";

                    //RECORRIDO DE ARRAY PARA GENERAR VALORES EN LA TABLA 
                    foreach ($arrayconvuelos as $vuelo) :
            ?>
                        <tr>

                            <td><?php echo $vuelo['id']; ?></td>
                            <td><?php echo $vuelo['CiudadOrigen']; ?></td>
                            <td><?php echo $vuelo['CiudadDestino']; ?></td>
                            <td><?php echo $vuelo['Operadora']; ?></td>
                            <td><?php echo $vuelo['Fecha']; ?></td>
                            <td><?php echo $vuelo['CantidadViajeros']; ?></td>
                            <td><a href="edit.php?id=<?php echo $vuelo['id'] ?>">edit</a></td>
                            <td><a href="delete.php?id=<?php echo $vuelo['id'] ?>">delete</a></td>

                        </tr>
            <?php
                    endforeach;
                } else {
                    header("Location: login.php");
                }
            }

            ?>
        </tbody>
    </table>
    </tbody>
    </table>


    <div class="row">

        <header class="pie de pagina">
            <div class="menu_bar d-flex justify-content-center align-content-center">
                <a href="#" class="bt-menu"><img src="../images/logo.png" alt="" class=""><i class="fas fa-bars"></i></a>
            </div>

            <nav class="menu">
                <ul class="d-flex d-inline-block justify-content-around align-items-center">



                    <li class="">
                        <button type="button"><a href="create.php"><i class=""></i><span><strong>Nuevo vuelo</strong></span></a></button>
                    </li>

                </ul>
            </nav>
        </header>
    </div>
</body>

</html>
