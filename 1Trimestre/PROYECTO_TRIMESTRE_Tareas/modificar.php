<?php
session_start();
include './libreria/funciones.php';


if(isset($_POST['modificar'])){
$idModif = $_POST['modificar'];
    
    $idTarea = encontrarIdTarea($idModif);
    $mensaje = 'Id de la tarea: ' . $idTarea;
    $resultado = encontrarTarea($idTarea);

    $inputHidden = '<input type="text" value="' . $idTarea . '" name="idTarea" hidden>';
} else {
    $mensaje = 'Ha habido un error. Pulsa <a href="./contenido.php">aquí</a> para volver atrás';
    $inputHidden = '';
}


require'views/modificar.view.php';

?>