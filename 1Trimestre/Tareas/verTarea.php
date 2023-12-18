<?php
include("conexion.php");

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID de tarea no válido.";
    exit();
}

$tarea_id = $_GET['id'];

$stmt = $conexion->prepare("SELECT * FROM tarea WHERE id = :tarea_id");
$stmt->bindParam(":tarea_id", $tarea_id);
$stmt->execute();
$tarea = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$tarea) {
    echo "La tarea no existe.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de Tarea</title>
</head>
<body>
    <h1>Detalles de Tarea</h1>
    <h2><?php echo $tarea['titulo']; ?></h2>
    <p><?php echo $tarea['descripcion']; ?></p>
    <a href="tareas.php">Volver a la lista de tareas</a>
</body>
</html>
