<?php
require_once('./Mamifero.php');

class Gato extends Mamifero{
    
    public function __construct($nombre, $edad, $color, $larguraPelaje){
        parent::__construct($nombre, $edad, $color, $larguraPelaje);
        $this->numPatas = 4;
        $this->numAnimales++;
    }

    public function hablar(){
        echo '<p>Miau</p>';
    }

    

}


?>