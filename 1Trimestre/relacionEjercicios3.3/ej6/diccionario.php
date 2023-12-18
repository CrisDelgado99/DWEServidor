<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
    $arrDiccionario = [
        "Hola" => "Hello",
        "Adiós"=> "Bye",
    ];

    foreach ($arrDiccionario as $palabra => $traduccion) {
        echo $palabra . " - " . $traduccion . "<br>";
    }
    
    ?>
</body>
</html>