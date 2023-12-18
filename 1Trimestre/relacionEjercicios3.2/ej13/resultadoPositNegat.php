<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = [];
        $contPos = 0;
        $contNeg = 0;
        $cont0 = 0;
        for($i = 0; $i < 10; $i++){
            $num[$i] = $_POST['num' . $i+1];

            if($num[$i] == 0){
                $cont0++;
            } elseif($num[$i] > 0){
                $contPos++;
            } else {
                $contNeg++;
            }
        }
        echo '<p>' . count($num) .'</p>';
        echo '<p>Los números que se han introducido son: ';
        for($i = 0; $i < count($num); $i++){
            if($i == 9){
                echo $num[$i] . ".";
            } else {
                echo $num[$i] . ", ";
            }
        }
        echo '</p>'
    ?>

    <p>Se han introducido <?=$contPos?> números positivos.</p>
    <p>Se han introducido <?=$contNeg?> números negativos.</p>
    <p>El cero se ha introducido <?=$cont0?> veces.</p>
</body>
</html>