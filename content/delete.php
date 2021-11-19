<?php 
    include "databaseManager.inc.php";
    $id = $_GET["id"];

    if (isset($_SESSION['perfil'])) {
        if ($_SESSION['perfil'] != "Gestor") {
            header("Location: login.php");
        }
    } else {
        borrarVuelo($id);
        header("Location: vuelosGestor.php");
    }
?>