<?php
session_start();
include("conexion.php");

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION["usuario_id"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accion = $_POST["accion"];

    if ($accion === "agregar") {
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];

        $stmt = $conexion->prepare("INSERT INTO tarea (titulo, descripcion) VALUES (:titulo, :descripcion)");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->execute();

        $tarea_id = $conexion->lastInsertId();

        $stmt = $conexion->prepare("INSERT INTO usuarios_tarea (tarea, usuario) VALUES (:tarea, :usuario)");
        $stmt->bindParam(":tarea", $tarea_id);
        $stmt->bindParam(":usuario", $usuario_id);
        $stmt->execute();

        header("Location: tareas.php");
        exit();
    } elseif ($accion === "editar") {
        $tarea_id = $_POST["tarea_id"];
        $titulo = $_POST["titulo"];
        $descripcion = $_POST["descripcion"];

        $stmt = $conexion->prepare("UPDATE tarea SET titulo = :titulo, descripcion = :descripcion WHERE id = :tarea_id AND id IN (SELECT tarea FROM usuarios_tarea WHERE usuario = :usuario)");
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descripcion", $descripcion);
        $stmt->bindParam(":tarea_id", $tarea_id);
        $stmt->bindParam(":usuario", $usuario_id);
        $stmt->execute();

        header("Location: tareas.php");
        exit();
    } elseif ($accion === "eliminar") {
        $tarea_id = $_POST["tarea_id"];

        $stmt = $conexion->prepare("DELETE FROM usuarios_tarea WHERE tarea = :tarea_id AND usuario = :usuario");
        $stmt->bindParam(":tarea_id", $tarea_id);
        $stmt->bindParam(":usuario", $usuario_id);
        $stmt->execute();

        $stmt = $conexion->prepare("DELETE FROM tarea WHERE id = :tarea_id");
        $stmt->bindParam(":tarea_id", $tarea_id);
        $stmt->execute();

        header("Location: tareas.php");
        exit();
    }

    header("Location: tareas.php");
    exit();
}
?>
