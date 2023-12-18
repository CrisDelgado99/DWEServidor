<?php
require_once('./Mamifero.php');

class Gato extends Mamifero{
    
    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
        $this->numPatas = 4;
    }





}


?>