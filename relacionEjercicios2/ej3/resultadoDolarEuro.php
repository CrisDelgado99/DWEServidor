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

            $num = $_GET['num'];

            echo $num . ' dólares son ' . $num*0.94 . ' euros'

        ?>
    </p>
    
</body>
</html>