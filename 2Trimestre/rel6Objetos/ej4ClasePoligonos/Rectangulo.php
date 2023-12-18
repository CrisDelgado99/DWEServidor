<?php

    require_once('./Poligono.php');
    class Rectangulo extends Poligono{
        private $lado1;
        private $lado2;

        public function __construct($lado1, $lado2){
            parent::__construct(4);
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
        }

        public function calcArea(){
            return $this->lado1 * $this->lado2;
        }

        public function calcPerimetro(){
            return ($this->lado1 * 2) + ($this->lado2 * 2);
        }

        public function __toString(){
            return 'Este es un rectángulo de ' . $this->lado1 . ' * ' . $this->lado2 . ' cms.';
        }
    }

?>