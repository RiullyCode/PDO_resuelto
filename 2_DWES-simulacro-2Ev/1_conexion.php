<?php
    $conexion = new PDO("mysql:host=localhost:3306;dbname=201_dwes-1_pdo", "root", "");
    $sql = "SELECT * FROM peliculas WHERE director='Tarantino'";
    $peliculas = $conexion->query($sql)
?>












