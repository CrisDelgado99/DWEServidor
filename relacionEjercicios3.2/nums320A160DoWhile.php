<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números existentes entre el 320 y el 160 de 20 en 20 utilizando do while</h1>
    <p>
        <?php
            $i = 320;
            do{
                if($i == 160){
                    echo $i . '.';
                } else {
                    echo $i . ', ';
                }

                $i-=20;
            }while($i >= 160);
        ?>
    </p>
</body>
</html>