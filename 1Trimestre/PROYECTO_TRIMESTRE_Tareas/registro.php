<?
session_start();

include './conexion.php';
include './libreria/funciones.php';
?>

    <?
    $boolMostrar = false;
    if (isset($_POST['inpUsuario']) && isset($_POST['inpPassword1']) && isset($_POST['inpPassword2'])) {
        $usuario = strtolower($_POST['inpUsuario']);
        $pass1 = hash('sha512', $_POST['inpPassword1']) ;
        $pass2 = hash('sha512', $_POST['inpPassword2']);
        $boolMostrar = true;

        if ($pass1 !=  $pass2) {
            $mensaje = '<p id="rojo">No se ha podido crear el usuario, las contraseñas no coinciden.</p>';
        } else if(usuarioExiste($usuario)){
            $mensaje = '<p id="rojo">No se ha podido crear el usuario, ya existe un usuario con ese nombre.</p>';
        } else { //Usuario nuevo y contraseñas coinciden
            añadirUsuario($usuario, $pass1);
            $mensaje = '<p id="verde">Usuario creado correctamente.</p> 
                            <p><a href="./login.php">Acceder</a> </p>';
        }
    }

    require 'views/registro.view.php';
    ?>


