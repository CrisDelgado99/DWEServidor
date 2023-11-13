<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        $stringNums = $_POST['stringNums']; 

        $arrNumAl = explode(' ', $stringNums);


        $num1 = $_POST['num1'];

        $num2 = $_POST['num2'];

        for($i = 0; $i < 100; $i++){
            if($arrNumAl[$i] == $num1){
                $arrNumAl[$i] = $num2;
            }
        }

        $stringNums = implode(' ', $arrNumAl);

    ?>

    <p>Los números resultantes son: </p>
    <p><?=$stringNums?></p>
    
</body>
</html>