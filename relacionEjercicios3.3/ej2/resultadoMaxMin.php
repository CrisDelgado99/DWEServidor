<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numArr = [$_POST['n1'], $_POST['n2'], $_POST['n3'], $_POST['n4']];

        for($i = 0; $i < count($numArr); $i++){
            if($numArr[$i] == max($numArr)){
                echo '<p>' . $numArr[$i] . ' MÁXIMO </p>';
            } elseif($numArr[$i] == min($numArr)){
                echo '<p>' . $numArr[$i] . ' MÍNIMO </p>';
            } else {
                echo '<p>' . $numArr[$i] . '</p>';
            }
            
        }

    ?>
</body>
</html>