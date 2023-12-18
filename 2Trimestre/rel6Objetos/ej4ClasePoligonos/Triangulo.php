<?php

    require_once('./Poligono.php');
    class Triangulo extends Poligono{
        private $base;
        private $altura;

        public function __construct($base, $altura){
            parent::__construct(4);
            $this->base = $base;
            $this->altura = $altura;
        }

        public function calcArea(){
            return ($this->base * $this->altura) / 2;
        }

        public function calcPerimetro(){
            return 'En mantenimiento';
        }

        public function __toString(){
            return 'Este es un triángulo de ' . $this->base . 'cm de base y ' . $this->altura . 'cm de altura';
        }
    }

?>