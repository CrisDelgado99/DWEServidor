<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./Persona.php');

    $cris = new Persona('Cristina', 'Delgado', 'Muñoz', 24);

    $cris->saludo();
    $cris->presentarse();

    echo 'Hola, ' . $cris;

    echo '<br>';

    echo 'Mi nombre completo es ' . $cris->nombreCompleto()
    ?>
</body>

</html>