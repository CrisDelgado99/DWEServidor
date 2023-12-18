<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Múltiplos de 5 existentes entre el 0 y el 100 utilizando for</h1>
    <p>
        <?php
            for($i = 0; $i <= 100; $i = $i+5){
                if($i == 100){
                    echo $i . '.';
                } else {
                    echo $i . ', ';
                }
            }
        ?>
    </p>
</body>
</html>