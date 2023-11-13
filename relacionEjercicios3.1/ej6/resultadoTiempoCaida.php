<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            const gravedad = 9.81;
            $h = $_POST['h'];

            echo 'El objeto tardará ' . sqrt(2*$h/gravedad) . ' segundos en caer.';
        ?>
    </p>
</body>
</html>