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
        <div class="row-12 mt-5">
            <div class="col-12 mb-3">
                <section class="card ">
                    <header class="card-header">

                        <h2 class="card-title">Vuelos</h2>
                    </header>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm mb-0">
                            <thead>
                                <tr>
                                    <th>Origen</th>
                                    <th>Destino</th>
                                    <th>Operadora</th>
                                    <th>Fecha</th>
                                    <th>Numero Viajeros</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>


                            <?php
                            include  'databaseManager.inc.php';
                            $arrayconvuelos = mostrarVuelos();

                            echo "</br>";
                            echo "</br>";

                            //RECORRIDO DE ARRAY PARA GENERAR VALORES EN LA TABLA 
                            foreach ($arrayconvuelos as $vuelo) :
                            ?>
                                <tr>

                                    <td class="align-middle"><?php echo $vuelo['id']; ?></td>
                                    <td class="align-middle"><?php echo $vuelo['CiudadOrigen']; ?></td>
                                    <td class="align-middle"><?php echo $vuelo['CiudadDestino']; ?></td>
                                    <td class="align-middle"><?php echo $vuelo['Operadora']; ?></td>
                                    <td class="align-middle"><?php echo $vuelo['Fecha']; ?></td>
                                    <td class="align-middle"><?php echo $vuelo['CantidadViajeros']; ?></td>
                                    <td class="align-middle"><a href="edit.php?id=<?php echo $vuelo['id'] ?>">edit</a></td>
                                    <td class="align-middle"><a href="delete.php?id=<?php echo $vuelo['id'] ?>">delete</a></td>


                                <tr></tr>
                                </tr>
                            <?php
                            endforeach;

                            ?>
                            </tbody>
                        </table>
                        <div class="row">
                            <header class="pie de pagina">
                                <nav class="menu1">
                                    <ul class="d-flex d-inline-block justify-content-around align-items-center">
                                        
                                    
                                    <li class="" >
                                            <button type="button"><a href="create.php" class="nuevo"><i ></i><span><strong>Nuevo vuelo</strong></span></a></button>
                                        </li>
                                    </ul>
                                </nav>
                            </header>
                        </div>
                    </div>
                </section>
            </div>
        </div>





</body>

</html>
