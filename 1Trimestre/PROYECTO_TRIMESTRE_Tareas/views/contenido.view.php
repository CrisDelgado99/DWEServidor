<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="./css/contenido.css">
    <script src="./js/script.js" defer></script>
</head>

<body>
    <h2 id="titulo">Tablón de <?= $usuario ?></h2>
    <p id="fraseDia"><?= $frase ?></p>

    <div id="divTabla">
        <h2 id="tituloTablon">MIS TAREAS:</h2>
        <table id='tablaModif'>
            <tr>
                <form action="contenido.php" method="post">
                    <th>Tarea nueva:</th>
                    <th><input type="text" name="tarea" id="tarea"></th>
                    <th>Descripción:</th>
                    <th><input type="text" name="descripcion" id="descripcion"></th>
                    <th><button type="submit">+</button></th>
                </form>
            </tr>

        </table>

        <table>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>DESCRIPCION</th>
                <th>MODIF/BORRAR</th>
            </tr>
            <?php
                impTareasUsuario($arrFila);
            ?>
        </table>
        <div id='modifTarea'>

        </div>
    </div>

    <form action="salir.php" method="post">
        <button type="submit">Salir de mi tablón</button>
    </form>



</body>

</html>