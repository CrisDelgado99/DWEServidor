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

            $num = $_POST['num'];

            echo $num . ' euros son ' . $num*1.06440 . ' dólares'

        ?>
    </p>
    
</body>
</html>