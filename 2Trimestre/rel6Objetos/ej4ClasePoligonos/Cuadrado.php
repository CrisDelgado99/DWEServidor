<?php

    require_once('./Poligono.php');
    class Cuadrado extends Poligono{
        private $lado;


        public function __construct($lado){
            parent::__construct(4);
            $this->lado = $lado;
        }

        public function calcArea(){
            return pow($this->lado, 2);
        }

        public function calcPerimetro(){
            return $this->lado * 4;
        }

        public function __toString(){
            return 'Este es un cuadrado de ' . $this->lado . ' cms de lado.';
        }
    }

?>