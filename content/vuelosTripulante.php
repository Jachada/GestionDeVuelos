<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vuelos Tripulante</title>
    <?php
    include "databaseManager.inc.php";
    ?>
</head>

<body>
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
            $companya = "Vueling";
            $printeaTodo = mostrarPorCompanya($companya);

            foreach ($printeaTodo as $vuelo) {
            //$varid = $vuelo["id"]; ignore
            echo "<tr>";
            echo "<td>$vuelo[CiudadOrigen]</td>";
            echo "<td>$vuelo[CiudadDestino]</td>";
            echo "<td>$vuelo[Operadora]</td>";
            echo "<td>$vuelo[Fecha]</td>";
            echo "<td>$vuelo[CantidadViajeros]</td>";
            //echo "<td><a href='edit.php?id=$varid'>Editar</td>";
            echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>