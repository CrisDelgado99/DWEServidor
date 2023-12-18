<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./Rectangulo.php');
    require_once('./Cuadrado.php');
    require_once('./Triangulo.php');

    $miRectangulo = new Rectangulo(5.4, 5.5);

    echo '<h2>' . $miRectangulo . '</h2>';

    echo '<h4>Área:</h4>';
    echo '<p>' . $miRectangulo->calcArea() . 'cm2</p>';

    echo '<h4>Perímetro:</h4>';
    echo '<p>' . $miRectangulo->calcPerimetro() . 'cm</p>';

    /////////////////////////////////////////////////////////////////////////////////////////////
    echo '<br>';

    $miCuadrado = new Cuadrado(7);

    echo '<h2>' . $miCuadrado . '</h2>';

    echo '<h4>Área:</h4>';
    echo '<p>' . $miCuadrado->calcArea() . 'cm2</p>';

    echo '<h4>Perímetro:</h4>';
    echo '<p>' . $miCuadrado->calcPerimetro() . 'cm</p>';

    /////////////////////////////////////////////////////////////////////////////////////////////
    echo '<br>';

    $miTriangulo = new Triangulo(4, 5);

    echo '<h2>' . $miTriangulo . '</h2>';

    echo '<h4>Área:</h4>';
    echo '<p>' . $miTriangulo->calcArea() . 'cm2</p>';

    echo '<h4>Perímetro:</h4>';
    echo '<p>' . $miTriangulo->calcPerimetro() . '</p>';
    ?>
</body>

</html>