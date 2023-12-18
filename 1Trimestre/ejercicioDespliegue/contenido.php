<?php
    session_start();

    $_SESSION['usuario'] = 'patata';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="main">
        <h1>¡Hola, <?=$_SESSION['usuario']?>!</h1>
        <p>¡Encantada de volver a verte!</p>
        <img src="./imgs/hiCat.png" alt="Gato saludando">
        <p><a href="">Volver atrás</a></p>
    </div>
    
</body>
</html>