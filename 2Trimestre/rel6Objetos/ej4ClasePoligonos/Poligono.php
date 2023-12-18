<?php

abstract class Poligono{
    private $numLados;

    public function __construct($numLados){ 
        $this->numLados = $numLados;
    }

    public function calcArea(){

    }

    public function calcPerimetro(){

    }

    public function __toString(){
        return "";
    }
}

?>