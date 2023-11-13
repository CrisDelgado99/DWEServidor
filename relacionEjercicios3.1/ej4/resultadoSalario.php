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
            $numHoras = $_POST['numHoras'];

            if($numHoras <= 40){
                echo 'tu salario será de ' . $numHoras*12 . '€.';
            } else {
                echo 'tu salario será de ' . 40*12 + ($numHoras-40)*16 . '€.';
            }
        ?>
    </p>
</body>
</html>