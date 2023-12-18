<?
function elegirTipoCarta($numCarta){
    switch($numCarta){
        case 1: 
            return 'c';
        case 2:
            return 'd';
        case 3:
            return 'p';
        case 4:
            return 't';
    }
}

function mostrarGanador($num1, $num2){
    if($num1 > $num2){
        echo "<p>Ha ganado el jugador A</p>";
    } else if($num1 == $num2){
        echo "<p>Ha habido un empate</p>";
    } else {
        echo "<p>Ha ganado el jugador B</p>";
    }
}

?>