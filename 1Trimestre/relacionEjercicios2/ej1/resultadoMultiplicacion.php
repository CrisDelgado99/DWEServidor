<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $resultado = $num1 * $num2;
    
        echo '<p>' . $num1 . ' * ' . $num2 . ' = ' . $resultado . '</p>'
    ?>
</body>
</html>