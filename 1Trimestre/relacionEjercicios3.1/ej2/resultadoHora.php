<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $horaStr = $_POST['hora'];

            echo $horaStr . ': ';

            $partesStr = explode(':', $horaStr, 2);

            $parteHora = (int)$partesStr[0];


            if($parteHora >= 6 && $parteHora <= 12){
                echo 'Buenos días';
            } elseif($parteHora > 12 && $parteHora <= 20) {
                echo 'Buenas tardes';
            } else {
                echo 'Buenas noches';
            }
        ?>
    </p>
</body>
</html>