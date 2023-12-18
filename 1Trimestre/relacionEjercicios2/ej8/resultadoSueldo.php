<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $horas = $_POST['horas'];

        echo 'Habiendo trabajado ' . $horas . ' horas, y con un sueldo de 12€/h, esta semana tu salario es de ' . $horas*12 . '€.'
    
    ?>
</body>
</html>