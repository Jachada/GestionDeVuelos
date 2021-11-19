<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vuelo</title>
</head>

<body>


    <form>

        <label for="origen">Ciudad de origen: </label>
        <input type="text" name="origen" value="<?php ?>" placeholder="Ciudad de origen"/>
        <span style="color:red;"></span>

        <br>

        <label for="destino">Ciudad de destino: </label>
        <input type="text" name="destino" value="<?php ?>" placeholder="Ciudad de destino"/>
        <span style="color:red;"></span>

        <br>

        <label for="operadora">Operadora: </label>
        <input type="text" name="operadora" value="<?php ?>" placeholder="Operadora"/>
        <span style="color:red;"></span>

        <br>

        <label for="fecha">Fecha del viaje: </label>
        <input type="date" name="estreno" value="<?php ?>" placeholder="Fecha del viaje">
        <span style="color:red;"></span>

        <br>

        <label for="CantidadViajeros">Cantidad de viajeros: </label>
        <input type="number" name="CantidadViajeros" value="<?php ?>" placeholder="Cantidad de viajeros">
        <span style="color:red;"></span>

        <br>

        <input type="submit" value="Editar" class="btn-enviar">

    </form>

</body>

</html>