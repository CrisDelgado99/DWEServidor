<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Array generado:</p>
    <?php 

        include ("./bibliotecaArrays/biblioArray.php");        

        $array = generaArrayInt(10, 0, 20);
    
        echo impArray($array);
    
    ?>
    <p>Array rotado a la derecha 4 puestos:</p>
    <?php 
    
        echo impArray(rotaArrayDer($array, 4));
    
    ?>
    <p>Array rotado a la izquierda 4 puestos:</p>
    <?php 
    
        echo impArray(rotaArrayIzq($array, 4));
    
    ?>


</body>
</html>