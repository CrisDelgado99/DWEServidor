<?php
session_start();
include("conexion.php");

if (!isset($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}

$usuario_id = $_SESSION["usuario_id"];

// Obtener y mostrar la lista de tareas del usuario actual
$stmt = $conexion->prepare("SELECT id, titulo FROM tarea WHERE id IN (SELECT tarea FROM usuarios_tarea WHERE usuario = :usuario)");
$stmt->bindParam(":usuario", $usuario_id);
$stmt->execute();
$tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Tareas</title>
</head>
<body>
    <h1>Gestión de Tareas</h1>
    <h2>Tareas Pendientes</h2>
    <ul>
        <?php
        foreach ($tareas as $tarea) {
            echo "<li>";
            echo "<a href='verTarea.php?id={$tarea['id']}'>{$tarea['titulo']}</a>";
            echo " <a href='editarTarea.php?id={$tarea['id']}'>Editar</a>";
            echo " <button onclick='eliminarTarea({$tarea['id']})'>Eliminar</button>";
            echo "</li>";
        }
        ?>
    </ul>
    <h2>Añadir Nueva Tarea</h2>
    <form action="realizarTareas.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion"></textarea>
        <br>
        <button type="submit" name="accion" value="agregar">Agregar</button>
    </form>
    <br>
    <a href="logout.php">Cerrar Sesión</a>

    <script>
function eliminarTarea(tareaId) {
    if (confirm("¿Seguro que deseas eliminar esta tarea?")) {
        var form = document.createElement('form');
        form.method = 'post';
        form.action = 'realizarTareas.php';

        var inputAccion = document.createElement('input');
        inputAccion.type = 'hidden';
        inputAccion.name = 'accion';
        inputAccion.value = 'eliminar';

        var inputTareaId = document.createElement('input');
        inputTareaId.type = 'hidden';
        inputTareaId.name = 'tarea_id';
        inputTareaId.value = tareaId;

        form.appendChild(inputAccion);
        form.appendChild(inputTareaId);

        document.body.appendChild(form);
        form.submit();
    }
}
</script>
</body>
</html>
