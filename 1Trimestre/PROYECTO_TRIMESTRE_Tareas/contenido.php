<?php
session_start();

include './libreria/funciones.php';
include './conexion.php';

$usuario = $_SESSION['usuario'];
$idUsuario = $_SESSION['idUsuario'];

$frase = fraseDia(rand(1, 14));

//CREAR UNA NUEVA TAREA____________________________________________________________________________________________
if (isset($_POST['tarea']) && isset($_POST['descripcion'])) {
    if ($_POST['tarea'] == '' || $_POST['descripcion'] == '') {
        //Mensaje de error (Campos vacíos)
        $mensaje = 'Por favor, introduzca todos los datos.';
    } else if (strlen($_POST['tarea']) > 20 || strlen($_POST['descripcion']) > 200) {
        //Mensaje de error (Demasiados caracteres, no soportado por nuestra tabla)
        $mensaje = 'Ha escrito demasiados caracteres.';
    } else {
        //Mensaje de éxito
        $mensaje = 'Datos introducidos correctamente.';

        //Datos a introducir en la tarea
        $tarea = $_POST['tarea'];
        $descripcion = $_POST['descripcion'];

        //añadirTarea
        añadirTarea($tarea, $descripcion);

        //Seleccionar el id de la ultima tarea introducida--------------------------------------------------------
        $maxId = idUltimaTarea();

        //Insertar los id de usuario y tarea en usuarios_tarea-----------------------------------------------
        AñadirUsuarioTarea($idUsuario, $maxId);
    }

    //Mandar alerta que dice si se ha introducido la tarea correctamente
    mandarAlert($mensaje);
}
//BORRAR DATOS________________________________________________________________________________________________
if (isset($_POST['borrar'])) {
    $idBorrar = $_POST['borrar'];
    //idBorrar es el id de usuarios_tarea, necesito encontrar el id de tarea.
    $idTareaBorrar = encontrarIdTarea($idBorrar);
    borrarTarea($idBorrar, $idTareaBorrar);
}

//MODIFICAR TAREA______________________________________________________________________________________________
if (isset($_POST['idTarea']) && isset($_POST['tareaModif']) && isset($_POST['descripcionModif'])) {
    if (($_POST['tareaModif'] == '') || ($_POST['descripcionModif'] == '')) {
        $mensajeModif = 'Por favor, para modificar la tarea escriba nuevos valores.';
    } else if (strlen($_POST['tareaModif']) > 20 || strlen($_POST['descripcionModif']) > 200) {
        $mensajeModif = 'Ha escrito más caracteres de los aceptados.';
    } else {
        $mensajeModif = 'Se han podido realizar los cambios en la tarea.';

        $idTarea = $_POST['idTarea'];
        $tareaModif = $_POST['tareaModif'];
        $descripcionModif = $_POST['descripcionModif'];

        //AQUI LLAMAMOS A FUNCION MODIFICAR TAREA CON LOS 3 DATOS RECIENTEMENTE RECUPERADOS
        modificarTarea($idTarea, $tareaModif, $descripcionModif);
    }

    mandarAlert($mensajeModif);

}

//PREPARAR LA BÚSQUEDA PARA IMPRIMIR LAS TAREAS PENDIENTES DEL USUARIO_______________________________________________________   
$arrFila = crearArrTareas($idUsuario);
//El resto de esta sección se encuentra en una función en la librería, y se la llama desde contenido.view.php para que se imprima donde
//se debe imprimir


require './views/contenido.view.php';



?>
<? ?>