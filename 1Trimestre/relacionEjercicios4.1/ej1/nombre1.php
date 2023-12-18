<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php

    
    if(!isset($_SESSION["nombre"])){
        echo "
            <form method=\"post\">
                <p>Introduzca su nombre, por favor: </p>
                <input type=\"text\" name=\"nombreInput\" id=\"nombreInput\">
                <button type=\"submit\">Enviar</button>
            </form>
        ";

        
        if(!is_null($_POST["nombreInput"])){
            $_SESSION["nombre"] = $_POST["nombreInput"];
        }
        
    } else {
        echo "<p>Hola, " . $_SESSION["nombre"] . "</p>";
    }
    
    ?>
    
</body>
</html>