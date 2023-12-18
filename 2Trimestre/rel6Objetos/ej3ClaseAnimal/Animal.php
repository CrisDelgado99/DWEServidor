<?php

    class Animal{
        //Atributos estáticos (de clase)
        private static $numAnimales;
        
        //Atributos de instancia (objeto)
        private $color;
        protected $numPatas;
        private $nombre;
        private $edad;
        private $imagen;


        public function __construct($nombre, $edad){
            $this->nombre = $nombre;
            $this->edad = $edad;

        }
    }

?>