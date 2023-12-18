<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once('./Perro.php');


    $perro1 = new Perro('Dogui', 14, 'canela claro', 'medio', 'Spitz Alemán');
    $perro2 = new Perro('Furi', 2, 'marrón', 'largo', 'San Bernardo');

    echo $perro1;
    echo '<br>';

    echo $perro2;
    echo '<br>';

    $perro1->pelearse($perro2);

    ?>
    
</body>
</html>