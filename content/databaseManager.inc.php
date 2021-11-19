<?php

    global $conn;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=aeropuertos", "developer", "developer");
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
    }

    /*
    * Mostrar todos los vuelos existentes.
    */
    function mostrarVuelos() {

        try {

            $sqlQuery = "SELECT * FROM vuelos";
            $stmt = $GLOBALS['conn']->query($sqlQuery);
        
            $vuelos = $stmt->fetchAll();
        
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;
    
        return $vuelos;

    }

    /*
    * Mostrar todos los vuelos por ciudad de origen.
    */
    function mostrarPorOrigen($origen) {

        try {

            $sqlQuery = "SELECT * FROM vuelos WHERE CiudadOrigen = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $origen);
        
            $stmt->execute();
        
            $vuelos = $stmt->fetchAll();
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    
        $stmt = null;

        return $vuelos;

    }

    /*
    * Mostrar todos los vuelos por ciudad de destino.
    */
    function mostrarPorDestino($destino) {
        try {

            $sqlQuery = "SELECT * FROM vuelos WHERE CiudadDestino = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $destino);
        
            $stmt->execute();
        
            $vuelos = $stmt->fetchAll();
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    
        $stmt = null;

        return $vuelos;
    }

    /*
    * Mostrar todos los vuelos por compañia.
    */
    function mostrarPorCompanya($companya) {
        try {

            $sqlQuery = "SELECT * FROM vuelos WHERE Operadora = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $companya);
        
            $stmt->execute();
        
            $vuelos = $stmt->fetchAll();
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    
        $stmt = null;

        return $vuelos;
    }

    /*
    * Mostrar el nombre de las ciudades de origen y destino sin valores repetidos.
    */
    function mostrarCiudades() {
        try {

            $sqlQuery = "SELECT CiudadOrigen, CiudadDestino FROM vuelos";
            $stmt = $GLOBALS['conn']->query($sqlQuery);
        
            $ciudades = $stmt->fetchAll();
        
        } catch (PDOException $e) {
            $e->getMessage();
        }
        $stmt = null;

        $ciudadesArray = [];

        foreach($ciudades as $ciudad) {
            array_push($ciudadesArray, $ciudad["CiudadOrigen"]);
            array_push($ciudadesArray, $ciudad["CiudadDestino"]);
        }

        $ciudadesArray = array_unique($ciudadesArray);

        return $ciudadesArray;
    }

    mostrarCiudades();

    function crearVuelo() {

    }

    function editarVuelo() {

    }
?>