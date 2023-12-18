<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/modificar.css">
</head>

<body>
    <div id="padrePopup">
        <div id="popup">
            <div>
                <h2>Modificar tarea</h2>
                <form action="contenido.php" method="post">
                    <div>
                        <p>Tarea:</p>
                        <input type="text" name="tareaModif" id="tareaModif" value="<?=$resultado['titulo']?>">
                    </div>
                    <div>
                        <p>Descripción:</p>
                        <input type="text" name="descripcionModif" id="descripcionModif" value="<?=$resultado['descripcion']?>">
                    </div>
                    <?php
                    echo $inputHidden;
                    ?>
                    <button type="submit">Modificar</button>
                </form>
                <p><a href="contenido.php">Volver atrás</a></p>
                <?php
                imprimirMensaje($mensaje);
                ?>
            </div>


        </div>
    </div>
</body>

</html>