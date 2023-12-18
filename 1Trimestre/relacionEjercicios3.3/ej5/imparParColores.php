<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números pares e impares:</h1>

    <?php
        $arrNum = [];

        for($i = 0; $i < 8; $i++){
            $arrNum[$i] = rand(0, 10);

            if($arrNum[$i]%2 == 0){
                echo '<p style="color:green;">' . $arrNum[$i] . '</p>';
            } else {
                echo '<p style="color:blue;">' . $arrNum[$i] . '</p>';
            }
        }
    
    ?>
</body>
</html>