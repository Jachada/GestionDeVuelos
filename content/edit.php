<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vuelo</title>
    <script src="https://kit.fontawesome.com/aa8be086da.js"></script>
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css" media="screen" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <header class="cabecera col-12 ">
                <div class="menu_bar d-flex justify-content-center align-content-center">
                    <a href="#" class="bt-menu"><img src="images/logo.png" alt="" class=""><i class="fas fa-bars"></i></a>
                </div>

                <nav class="menu">
                    <ul class="d-flex d-inline-block justify-content-around align-items-center">
                        <li>
                            <a href="index.php"><i class=""></i><span><strong>Inicio</strong></span></a>
                        </li>

                        <li class="">
                            <a href="./content/acercade.php"><i class=""></i><span><strong>Acerca de</strong></span></a>
                        </li>
                        <div class="div-logo">
                            <li> <a href="index.php"><img src="images/logo.png" alt="" class="logo"></a></li>
                        </div>

                        <li class="">
                            <a href="./content/login.php"><i class=""></i><span><strong>Login</strong></span></a>
                        </li>
                        <li class="">
                            <a href="./content/registro.php"><i class=""></i><span><strong>Registro</strong></span></a>
                        </li>

                    </ul>
                </nav>
            </header>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js"></script>


    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card facturacion" style="background: #7FC9FF91">

                <div class="card-body">
                    <h3 class="card-title">Editar vuelo</h3>

                    <form>
                        <div class="form-group">
                            <label for="origen">Ciudad de origen: </label>
                            <input type="text" name="origen" value="<?php ?>" placeholder="Ciudad de origen" />
                            <span style="color:red;"></span>

                            <br><br>

                            <label for="destino">Ciudad de destino: </label>
                            <input type="text" name="destino" value="<?php ?>" placeholder="Ciudad de destino" />
                            <span style="color:red;"></span>

                            <br><br>

                            <label for="operadora">Operadora: </label>
                            <input type="text" name="operadora" value="<?php ?>" placeholder="Operadora" />
                            <span style="color:red;"></span>

                            <br><br>

                            <label for="fecha">Fecha del viaje: </label>
                            <input type="date" name="estreno" value="<?php ?>" placeholder="Fecha del viaje">
                            <span style="color:red;"></span>

                            <br><br>

                            <label for="CantidadViajeros">Cantidad de viajeros: </label>
                            <input type="number" name="CantidadViajeros" value="<?php ?>" placeholder="Cantidad de viajeros">
                            <span style="color:red;"></span>

                            <br><br>

                            <input type="submit" value="Editar" class="btn-enviar">
                        </div>

                    </form>
                </div>
            </div>
        </div>

</body>

</html>