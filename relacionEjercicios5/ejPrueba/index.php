<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $arrPersonas = [
        array("nombre" => "Manolo", "edad" => "35", "cabello" => "grisáceo"),
        array("nombre" => "Manola", "edad" => "25", "cabello" => "marrón"),
    ];

    foreach ($arrPersonas as $persona) {
        echo $persona["nombre"] . " " . $persona["edad"] ." " . $persona["cabello"] . "<br>";
    }
    ?>
</body>
</html>