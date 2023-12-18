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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];

    $stmt = $conexion->prepare("UPDATE tarea SET titulo = :titulo, descripcion = :descripcion WHERE id = :tarea_id");
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":descripcion", $descripcion);
    $stmt->bindParam(":tarea_id", $tarea_id);
    $stmt->execute();

    header("Location: tareas.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form action="editarTarea.php?id=<?php echo $tarea_id; ?>" method="post">
        <label for="titulo">Nuevo Título:</label>
        <input type="text" name="titulo" value="<?php echo $tarea['titulo']; ?>" required>
        <br>
        <label for="descripcion">Nueva Descripción:</label>
        <textarea name="descripcion"><?php echo $tarea['descripcion']; ?></textarea>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>
    <br>
    <a href="tareas.php">Cancelar y volver a la lista de tareas</a>
</body>
</html>
