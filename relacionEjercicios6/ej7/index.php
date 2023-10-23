<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include ("./biblioArrayBi/biblioArrayBi.php");
    $arrayBi = generaArrayBiInt(4, 5, 0, 20);

    impArrayBiInt($arrayBi);

    echo "<br><br>";

    filaDeArrayBiInt($arrayBi, 3);

    echo "<br><br>";
    
    columnaDeArrayBiInt($arrayBi,3);
    
    ?>
</body>
</html>