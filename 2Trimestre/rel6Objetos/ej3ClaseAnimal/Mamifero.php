<?php
require_once('./Animal.php');

abstract class Mamifero extends Animal{
    protected $larguraPelaje;
    public function __construct($nombre, $edad, $color, $larguraPelaje){
        parent::__construct($nombre, $edad, $color);
        $this->larguraPelaje = $larguraPelaje;
    }




}


?>