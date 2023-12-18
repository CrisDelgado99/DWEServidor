<?
session_start();

include './biblioteca/funciones.php';

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
    <form action="index.php" method="post">
        <div>
            <h1>Jugador A:</h1>
            <img src="./imgs/<?=$_SESSION['tipoJug1']?><?=$_SESSION['jugador1']?>.svg" alt="cartaA">
        </div>

        <div>
            <h1>Jugador B:</h1>
            <img src="./imgs/<?=$_SESSION['tipoJug2']?><?=$_SESSION['jugador2']?>.svg" alt="cartaB">
        </div>

        <?
        mostrarGanador($_SESSION['jugador1'], $_SESSION['jugador2']);
        ?>
        <button type="submit">Repetir la jugada</button>
    </form>

</body>

</html>