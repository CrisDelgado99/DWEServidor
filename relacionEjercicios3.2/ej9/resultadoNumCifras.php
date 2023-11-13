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

            $numCifras = 0;

            while($num > 0){
                $num /= 10;
                $num = (int) $num;
                $numCifras++;
            }

            echo 'Tu número tiene ' . $numCifras . ' cifras.'
        ?>
    </p>
</body>
</html>