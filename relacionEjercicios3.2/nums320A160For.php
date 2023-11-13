<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números existentes entre el 320 y el 160 de 20 en 20 utilizando for</h1>
    <p>
        <?php
            for($i = 320; $i >= 160; $i = $i-20){
                if($i == 160){
                    echo $i . '.';
                } else {
                    echo $i . ', ';
                }
            }
        ?>
    </p>
</body>
</html>