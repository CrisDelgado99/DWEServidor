<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $h = $_POST['h'];
        $a = $_POST['a'];

        $area = $h * $a;
    
        echo '<p>Un rectángulo de ' . $h . 'cm de altura y ' . $a . 'cm de ancho tiene un área de ' . $area . 'cm2</p>'
    ?>
</body>
</html>