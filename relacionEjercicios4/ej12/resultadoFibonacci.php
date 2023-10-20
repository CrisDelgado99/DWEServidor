<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
    ?>
    <h1>Sucesión de fibonacci, primeros <?=$num?> números</h1>

    <p>
    <?php
        $anterior = 0;
        $anterior2 = 1;
        $nuevoNum = 1;

        for($i = 1; $i <= $num; $i++){
            switch($i){
                case 1:
                    echo '0, ';
                    break;
                case 2:
                    echo '1, ';
                    break;
                case $num:
                    echo $anterior + $anterior2 . '.';
                    break;
                default:
                    $nuevoNum = $anterior + $anterior2;
                    echo $nuevoNum . ', ';
                    $anterior = $anterior2;
                    $anterior2 = $nuevoNum;
                    break;
            }
        }
    ?>
    </p>
    


    
</body>
</html>