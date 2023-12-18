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
        $r = $_POST['r'];

        $volumen = 1/3 * 3.14 * pow($r, 2) * $h;
    
        echo '<p>Un cono de ' . $h . 'cm de altura y ' . $r . 'cm de radio de la base tiene un volumen de ' . $volumen . 'cm3.</p>'
    ?>
</body>
</html>