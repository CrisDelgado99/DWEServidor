<?php
    class Session{
        public function __construct(){
            if (session_status() == PHP_SESSION_NONE){
                session_start();
            }
        }

        //MÉTODOS
        //setters
        public function setAtributo($atributo, $valor){
            $_SESSION[$atributo] = $valor;
        }

        //getters
        public function getAtributo($atributo){
            return (isset($_SESSION[$atributo])) ? $_SESSION[$atributo] : 'El atributo no existe';
        }

        //otras
        public function borrarAtributo($atributo){
            if(isset($_SESSION[$atributo])){
                unset($_SESSION[$atributo]);
            }
        }

        public function destruirSesion(){
            session_destroy();
        }
    }

?>