<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("./bibliotecaMates/biblioMates.php");

    echo voltear(1234);

    if(esCapicua(1221)){
        echo " Verdadero";
    }else {
        echo " Falso";
    }

    if(esPrimo(11)){
        echo " Verdadero";
    }else {
        echo " Falso";
    }

    echo " " . siguientePrimo(11);

    echo " " . potencia(5, 5);

    echo " " . digitos(1111);

    echo " " . digitoN(45678324454, 3);

    echo " " . posicionDigito(33331, 1);

    echo " " . quitaPorDetras(1234567, 3);

    echo " " . quitaPorDelante(1234567, 3);

    echo " " . pegaPorDetras(1234567, 3);

    echo " " . pegaPorDelante(1234567, 3);

    echo " " . trozoDeNumero(1234567, 3, 5);

    echo " " . juntaNumeros(222, 333);

    ?>
</body>
</html>