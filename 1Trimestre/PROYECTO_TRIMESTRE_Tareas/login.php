<?php
session_start();
include './libreria/funciones.php';
include './conexion.php';

        
        if(isset($_POST['inpUsuario']) && isset($_POST['inpPassword1'])){
            $usuario = strtolower($_POST['inpUsuario']);
            $password = hash('sha512', $_POST['inpPassword1']);

            $resultado = encontrarUsuario($usuario, $password);

            if($resultado){
                $_SESSION['idUsuario'] = $resultado['id'];
                $_SESSION['usuario'] = $usuario;
                header('location: contenido.php');  
                exit(); 
            } else {     
                echo 'Nombre o contraseña incorrectos.';
            }
        }

        require 'views/login.view.php';
    ?>



