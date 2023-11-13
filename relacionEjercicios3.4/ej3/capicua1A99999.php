<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("../ej1/bibliotecaMates/biblioMates.php");

    for($i = 1; $i <= 99999; $i++){
        if(esCapicua($i)){
            echo '<p>' . $i . '</p>';
        }
    }
    ?>
</body>
</html>