<?php

    abstract class Animal{
        //Atributos estáticos (de clase)
        protected static $numAnimales = 0;
        
        //Atributos de instancia (objeto)
        protected $color;
        protected $numPatas;
        protected $nombre;
        protected $edad;


        public function __construct($nombre, $edad, $color){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->color = $color;
        }

        public function hablar(){

        }
    }

?>