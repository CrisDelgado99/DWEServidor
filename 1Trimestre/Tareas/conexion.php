<?php
$host = "db";
$usuario = "root";
$contrasena = "test";
$db = "tareas";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>