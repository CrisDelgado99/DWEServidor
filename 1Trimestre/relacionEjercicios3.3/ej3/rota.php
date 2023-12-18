<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numArr = [];

        echo 'Array inicial: ';

        for($i = 0; $i < 15; $i++){
            $numArr[$i] = rand(0, 30);

            if($i == 14){
                echo $numArr[14] . '.';
            } else {
                echo $numArr[$i] . ', ';
            }
        }



        $numAsist = $numArr[14];

        echo '<br>';

        echo 'Array rotado: ';


        for($i = 14; $i > 0 ; $i--){
            $numArr[$i] = $numArr[$i-1];
        }

        $numArr[0] = $numAsist;

        for($i = 0; $i < 15; $i++){

            if($i == 14){
                echo $numArr[14] . '.';
            } else {
                echo $numArr[$i] . ', ';
            }
        }
    ?>
</body>
</html>