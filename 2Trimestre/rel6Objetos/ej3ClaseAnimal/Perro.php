<?php
require_once('./Mamifero.php');

class Perro extends Mamifero{
    private $raza;
    
    public function __construct($nombre, $edad, $color, $larguraPelaje, $raza){
        parent::__construct($nombre, $edad, $color, $larguraPelaje);
        $this->numPatas = 4;
        $this->raza = $raza;

    }

    public function __toString(){
        $nombre = '<p>Este perro se llama ' . $this->nombre . '</p>';
        $edad = '<p>Tiene ' . $this->edad . ' años</p>';
        $pelaje = '<p>Su pelaje es ' . $this->larguraPelaje . ', ' . $this->color . '</p>';
        $raza = '<p>Su raza es ' . $this->raza . '</p>';
        return $nombre . $edad . $pelaje . $raza;
    }

    public function hablar(){
        echo '<p>Guau</p>';
    }

    public function pelearse($contrincante){
        echo '<p>Oh, no, ' . $this->nombre . ' va a pelear contra ' . $contrincante->nombre . '</p>';
        switch(rand(1, 2)){
            case 1:
                echo '<p>Ha ganado ' . $this->nombre . '</p>';
                break;
            case 2:
                echo '<p>Ha ganado ' . $contrincante->nombre . '</p>';
        }
    }

}


?>