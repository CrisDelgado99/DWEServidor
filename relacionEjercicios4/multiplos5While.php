<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Múltiplos de 5 existentes entre el 0 y el 100 utilizando while</h1>
    <p>
        <?php

            $i = 0;

            while($i <= 100){
                if($i == 100){
                    echo $i . '.';
                } else {
                    echo $i . ', ';
                }

                $i = $i+5;

            }
        ?>
    </p>
</body>
</html>