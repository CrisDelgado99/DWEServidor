<?php
require_once('./Animal.php');

abstract class Ave extends Animal{
    
    public function __construct($nombre, $edad, $color){
        parent::__construct($nombre, $edad, $color);
        
    }





}


?>