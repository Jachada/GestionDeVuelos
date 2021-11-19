<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/aa8be086da.js"></script>
    <link rel="stylesheet" href="style/bootstrap.min.css"> 
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio</title>
</head>
<body>
  <?php
  include('content/databaseManager.inc.php');
  $ciudades = mostrarCiudades();
  $vuelos = mostrarVuelos();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $city = $_POST['ciudades'];
    $lugar = $_POST['lugar'];

    if ($lugar == "Destino") {
      $vuelos = mostrarPorDestino($city);
    } else if ($lugar == "Origen")  {
      $vuelos = mostrarPorOrigen($city);
    }

  }

  ?>
<div class="container-fluid">
      <div class="row">

        <header class="cabecera col-12 ">
          
          <nav class="menu">
            <ul class="d-flex d-inline-block justify-content-around align-items-center">
              <li>
                <a href="index.php"><i class=""></i><span><strong>Inicio</strong></span></a>
              </li>
              
              <div class="div-logo"> <li> <a href="index.php"><img src="images/logo.png" alt="" class="logo"></a></li></div>
             
              <li class="">
                <a href="./content/login.php"><i class=""></i><span><strong>Login</strong></span></a>
              </li>
              
              
            </ul>
          </nav>
        </header>
      </div> 
    </div>

    <div class="row-12 mt-5">
        <div class="col-12 mb-3">
         <div class="card" >
            
            <div class="card-body">
                <h3 class="card-title">Filtro</h3>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    
                    <div class="form-group">
                        <label for="select">Aeropuertos</label>
                        <select class="form-control" id="select" name="ciudades">
                          <?php
                              foreach ($ciudades as $ciudad) {
                                echo "<option value='$ciudad'>$ciudad</option>";
                              }
                          ?>
                        </select>
                        <br>
                        <label for="origen">Origen</label>
                        <input type="radio" name="lugar" id="" value="Origen">
                        <label for="origen">Destino</label>
                        <input type="radio" name="lugar" id="" value="Destino">                    </div>
                        <input type="submit" value="Buscar">
                </form>
            </div>
          </div>
        </div>
    </div>
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
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($vuelos as $vuelo) {
                  echo '<tr>';
                  echo '<td class="align-middle">' . $vuelo['CiudadOrigen'] . '</td>';
                  echo '<td class="align-middle">' . $vuelo['CiudadDestino'] . '</td>';
                  echo '<td class="align-middle">' . $vuelo['Operadora'] . '</td>';
                  echo '<td class="align-middle">' . $vuelo['Fecha'] . '</td>';
                  echo '<td class="align-middle">' . $vuelo['CantidadViajeros'] . '</td>';
                  echo '<tr>';
                }
                ?>

                
                </tbody>
            </table>
            </div>
        </section>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/menu.js" ></script>
  </body>
</html>
