<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("./biblioteca/biblioPrimo.php");
    
        $num = (int)$_POST["num"];

        if(is_int($num) && $num > 1 && $num <= 1000){
            echo "<p>Los números primos existentes entre 1 y " . $num . " son: </p>";

            for($i = 2; $i <= $num; $i++){
                if(esPrimo($i)){
                    echo $i . " ";
                }
            }
        } elseif(is_int($num) && $num == 1){
            echo "<p>1 no es un número primo.</p>";
        } else {
            echo "<p>Lo siento, debe introducir un número entero entre 1 y 1000.</p>";
            echo "<p>Puede volver a la página anterior pulsando <a href=\"./ej3.php\">aquí</a></p>";
        }
    
    ?>
</body>
</html>