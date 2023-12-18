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

        for($i = 0; $i < 20; $i++){
            $numArr[$i] = array("numero" => $num = rand(0,100), "cuadrado" => pow($num, 2), "cubo" => pow($num,3));
        }
    ?>

    <table>
        <tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>

        <?php
            for($i = 0; $i < 20; $i++){
                echo '<tr>';
                echo '<td>' . $numArr[$i]['numero'] . '</td>';
                echo '<td>' . $numArr[$i]['cuadrado'] . '</td>';
                echo '<td>' . $numArr[$i]['cubo'] . '</td>';
                echo '</tr>';
            }
        
        ?>
    </table>
        
    
</body>
</html>