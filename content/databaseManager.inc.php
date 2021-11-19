<?php

    global $conn;

    try {
        $conn = new PDO("mysql:host=192.168.129.80;dbname=cocina", "developer", "developer");
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
    }

    function mostrarTodo() {

    }

    function mostrarPorOrigen() {

    }

    function mostrarPorDestino() {

    }

    function mostrarPorCompanya() {

    }

    function mostrarCiudades() {

    }

    function crearVuelo($ciudadOrigen, $ciudadDestino, $operadora, $fecha, $cantidadViajeros) {
        
        try {
        $sqlQuery = "INSERT INTO vuelos (CiudadOrigen, CiudadDestino, Operadora, Fecha, CantidadViajeros) VALUES (?,?,?,?,?)";
        $stmt = $GLOBALS['conn']->prepare($sqlQuery);

        $stmt->bindParam(1, $ciudadOrigen);
        $stmt->bindParam(2, $ciudadDestino);
        $stmt->bindParam(3, $operadora);
        $stmt->bindParam(4, $fecha);
        $stmt->bindParam(5, $cantidadViajeros);

        $stmt->execute();

        $id = $GLOBALS['conn']->lastInsertId();
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $stmt = null;
    return $id; // Retorna la ID de ese último vuelo (?)
}

    function editarVuelo() {

    }
?>