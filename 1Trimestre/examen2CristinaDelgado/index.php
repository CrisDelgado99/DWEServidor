<?
session_start();

include './biblioteca/funciones.php';

$_SESSION['jugador1'] = rand(1, 10);
$_SESSION['jugador2'] = rand(1, 10);
$tipoCarta1 = rand(1,4);
$tipoCarta2 = rand(1,4); 
$_SESSION['tipoJug1'] = elegirTipoCarta($tipoCarta1);
$_SESSION['tipoJug2'] = elegirTipoCarta($tipoCarta2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Juego de cartas</title>
</head>

<body>
    <form action="resultado.php" method="post">
        <div>
            <h1>Jugador A:</h1>
            <img src="./imgs/dorso-rojo.svg" alt="dorso">
        </div>

        <div>
            <h1>Jugador B:</h1>
            <img src="./imgs/dorso-rojo.svg" alt="dorso">
        </div>

        <br><br>

        <button type="submit">Mostrar las cartas</button>
    </form>

</body>

</html>