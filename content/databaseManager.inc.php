<?php

    global $conn;

    try {
        $conn = new PDO("mysql:host=localhost;dbname=aeropuertos", "developer", "developer");
    } catch (PDOException $e) {
        echo "Connection fallida: " . $e->getMessage();
    }

    /*
    * Obtenemos todos los datos del usuario solicitado.
    */
    function getUser($username) {
        try {

            $sqlQuery = "SELECT * FROM usuarios WHERE nombre = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $username);

            $stmt->execute();

            $user = $stmt->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $user;
    }

    /*
    * Comprobacion de usuario existente.
    */
    function login($usuario, $password) {
        // Obtenemos el usuario solicitado.
        $user = getUser($usuario);
        $result = false;

        // Comprobamos si hemos conseguido obtener un usuario con los datos dados.
        if ($user) {
            // Y realizamos la verificacion de la contraseña.
            $result = password_verify($password, $user['Password']);
        }

        return $result;
    }

    /*
    * Mostrar datos de un vuelo mediante su id.
    */
    function mostrarVueloPorId($id) {

        try {

            $sqlQuery = "SELECT * FROM vuelos WHERE id = ?";
            $stmt = $GLOBALS['conn']->prepare($sqlQuery);
            $stmt->bindParam(1, $id);
        
            $stmt->execute();
        
            $vuelo = $stmt->fetchAll();
    
        } catch (PDOException $e) {
            $e->getMessage();
        }
    
        $stmt = null;

        return $vuelo;
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
