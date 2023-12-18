<?php
    class Persona{
        //Atributos de instancia
        private $nombre;
        private $apellido1;
        private $apellido2;
        private $edad;

        //Constructor
        public function __construct($nombre, $apellido1, $apellido2, $edad) {
            $this->nombre = $nombre;
            $this->apellido1 = $apellido1;
            $this->apellido2 = $apellido2;
            $this->edad = $edad;
        }

        //FUNCIONES
        //setters
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function setApellido1($apellido1){
            $this->apellido1 = $apellido1;
        }

        public function setApellido2($apellido2){
            $this->apellido2 = $apellido2;
        }

        public function setEdad($edad){
            $this->edad = $edad;
        }

        //getters
        public function getNombre(){
            return $this->nombre;
        }

        public function getApellido1(){
            return $this->apellido1;
        }

        public function getApellido2(){
            return $this->apellido2;
        }

        public function getEdad(){
            return $this->edad;
        }

        //toString
        public function __toString(){
            return $this->nombre . '';
        }

        //otras
        public function saludo(){
            echo '<p>Hola, ' . $this->nombre . ' ' . $this->apellido1 .  '</p>';
        }

        public function presentarse(){
            echo '<p>Hola a todos, me llamo ' . $this->nombre . ' ' . $this->apellido1 .  ' y tengo ' . $this->edad . ' años</p>';
        }

        public function mayorEdad(){
            return ($this->edad >= 18) ? true : false;
        }

        public function nombreCompleto(){
            return $this->nombre . ' ' . $this->apellido1 . ' ' . $this->apellido2;
        }
    }



?>