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

        $mult = $num1 * $num2;
        $div = $num1 / $num2;
        $suma = $num1 + $num2;
        $resta = $num1 - $num2;

        echo '<p>' . $num1 . ' * ' . $num2 . ' = ' . $mult . '</p>';
        echo '<p>' . $num1 . ' / ' . $num2 . ' = ' . $div . '</p>';
        echo '<p>' . $num1 . ' + ' . $num2 . ' = ' . $suma . '</p>';
        echo '<p>' . $num1 . ' - ' . $num2 . ' = ' . $resta . '</p>'
        
    ?>
</body>
</html>