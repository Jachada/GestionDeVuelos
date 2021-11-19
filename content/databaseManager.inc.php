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

    function crearVuelo() {

    }

    function editarVuelo() {

    }
?>