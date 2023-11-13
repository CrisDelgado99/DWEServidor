<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Cubo</th>
        </tr>

        <?php
        $num = $_POST['num'];

        for($i = 0; $i < 5; $i++){
            echo '<tr>';
            echo '<td>' . $num . '</td>';
            echo '<td>' . pow($num, 2) . '</td>';
            echo '<td>' . pow($num, 3) . '</td>';
            echo '</tr>';

            $num++;
        }
        ?>
    </table>
</body>
</html>