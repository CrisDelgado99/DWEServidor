<?php

//FUNCIONES CRUD_________________________________________________________________________________________

//CREATE, AÑADIR DATOS A LA TABLA--------------------------------------------------------------------------
//Añadir usuario a la tabla usuarios
function añadirUsuario($usuario, $pass1)
{
    include './conexion.php';

    $statement = $connexion->prepare('INSERT INTO usuarios(`usuario`, `password`) VALUES (:usuario, :password)');
    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $pass1
    ));
}
//Añadir tarea a la tabla tarea
function añadirTarea($tarea, $descripcion)
{
    include './conexion.php';
    //Insertar los datos en la tabla tarea------------------------------------------------------------------
    $statement = $connexion->prepare('INSERT INTO tarea(`titulo`, `descripcion`) VALUES(:tarea, :descripcion)');
    $statement->execute(array(
        ':tarea' =>  $tarea,
        ':descripcion' => $descripcion,
    ));
}

//Añadir el id de usuario y el de la tarea a usuarios_tarea
function añadirUsuarioTarea($idUsuario, $maxId)
{
    include './conexion.php';

    $statement = $connexion->prepare('INSERT INTO usuarios_tarea(`usuario`, `tarea`) VALUES(:idUsuario, :idTarea)');
    $statement->execute(array(
        ':idUsuario' => $idUsuario,
        'idTarea' => $maxId
    ));
}

//READ, LEER DATOS DE LA TABLA--------------------------------------------------------------------------------
function encontrarUsuario($usuario, $password)
{
    include './conexion.php';

    $statement = $connexion->prepare('SELECT usuario, password, id FROM usuarios WHERE usuario = :usuario AND password = :password');
    $statement->bindParam(':usuario', $usuario, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->execute();

    $resultado = $statement->fetch(PDO::FETCH_ASSOC);

    return $resultado;
}



function crearArrTareas($idUsuario)
{
    include './conexion.php';
    $statement = $connexion->prepare('SELECT * FROM tarea t JOIN usuarios_tarea ut ON(t.id = ut.tarea) WHERE ut.usuario LIKE :idUsuario');
    $statement->bindParam(':idUsuario', $idUsuario, PDO::PARAM_STR);
    $statement->execute();
    $arrFila = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $arrFila;
}

//Esta función imprime las tareas del usuario en su tablón. Si no hay, dice que no hay tareas pendientes
function impTareasUsuario($arrFila)
{
    if (count($arrFila) > 0) {
        foreach ($arrFila as $fila) {
            echo '<tr>
                    <td>' . $fila['tarea'] . '</td>
                    <td class="tituTd"> ' . $fila['titulo'] . '</td>
                    <td>' . $fila['descripcion'] . '</td>
                    <td>
                        <form action="contenido.php" method="post">
                            <button type="submit" class="borrar" id="' . $fila['id'] . '">x</button>
                            <input type="text" name="borrar" value="' . $fila['id'] . '" hidden>
                        </form>
                        <form action="modificar.php" method="post">
                            <button type="submit" class="modificar" id="' . $fila['id'] . '">Modificar</button>
                            <input type="text" name="modificar" value="' . $fila['id'] . '" hidden>
                        </form>                   
                    </td>
                </tr>';
        }
    } else {
        echo '<tr>
                <td id="noTareas" colspan="6">No tienes tareas pendientes</td>
            </tr>';
    }
}

//Esta funcion sirve para encontrar una tarea y obtener un array con su titulo y descripcion
function encontrarTarea($idTarea){
    include './conexion.php';

    $statement = $connexion->prepare('SELECT titulo, descripcion FROM tarea WHERE id = :idTarea');
    $statement->bindParam(':idTarea', $idTarea, PDO::PARAM_INT);
    $statement->execute();
    $resultado = $statement->fetch(PDO::FETCH_ASSOC);

    return $resultado;
}
//Esta funcion comprueba si un usuario existe
function usuarioExiste($usuario)
{
    include './conexion.php';

    $statement = $connexion->prepare('SELECT usuario FROM usuarios WHERE usuarios.usuario = :usuario');
    $statement->execute(array(':usuario' => $usuario));
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return !empty($result);
}

//Conseguir el id de la última tarea introducida (para introducirlo en usuarios_tarea)
function idUltimaTarea()
{
    include './conexion.php';

    $statement = $connexion->prepare('SELECT MAX(id) AS max_id FROM tarea');
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result['max_id'];
}

//esta función encuentra el id de la tarea a través del id de usuarios_tarea
function encontrarIdTarea($idUsuaTar)
{
    include './conexion.php';

    $statement = $connexion->prepare('SELECT tarea AS idTarea FROM usuarios_tarea WHERE usuarios_tarea.id = :idUsuaTar');
    $statement->execute(array(':idUsuaTar' => $idUsuaTar));
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    return $result['idTarea'];
}

//UPDATE, MODIFICAR DATOS DE LA TABLA------------------------------------------------------------------------
function modificarTarea($idTarea, $tareaModif, $descripcionModif)
{
    include './conexion.php';

    $statement = $connexion->prepare('UPDATE tarea
                                    SET titulo = :tareaModif, descripcion = :descripcionModif
                                    WHERE id = :idTarea');
    $statement->bindParam(':idTarea', $idTarea, PDO::PARAM_INT);
    $statement->bindParam(':tareaModif', $tareaModif, PDO::PARAM_STR);
    $statement->bindParam(':descripcionModif', $descripcionModif, PDO::PARAM_STR);

    $statement->execute();
}

//DELETE, BORRAR DATOS DE LA TABLA-----------------------------------------------------------------------------
function borrarTarea($idBorrar, $idTareaBorrar)
{
    include './conexion.php';
    //borrar de la tabla usuarios_tarea
    $statement = $connexion->prepare('DELETE FROM usuarios_tarea WHERE usuarios_tarea.id = :idBorrar');
    $statement->execute(array(':idBorrar' => $idBorrar));

    //borrar de la tabla tarea
    $statement = $connexion->prepare('DELETE FROM tarea WHERE tarea.id = :idBorrar');
    $statement->execute(array(':idBorrar' => $idTareaBorrar));
}

//FUNCIONES ADICIONALES____________________________________________________________________________
//Esta función devuelve la frase del día
function fraseDia($numRandom)
{
    switch ($numRandom) {
        case 1:
            return 'Tú puedes con todo';
        case 2:
            return 'Cuando sientas que tienes demasiado que hacer, divide y vencerás';
        case 3:
            return 'Hoy va a ser un buen día';
        case 4:
            return 'Estás consiguiendo lo que te propones';
        case 5:
            return 'Ve paso por paso, día por día';
        case 6:
            return 'Cada pequeño paso te acerca a tu gran meta';
        case 7:
            return 'La paciencia y la persistencia son claves para el éxito';
        case 8:
            return 'Aprovecha cada día, es una oportunidad para progresar';
        case 9:
            return 'Visualiza tu éxito, luego trabaja por ello';
        case 10:
            return 'Cada desafío es una oportunidad para crecer';
        case 11:
            return 'Sigue esforzándote, tus metas valen la pena';
        case 12:
            return 'Cree en ti, vales mucho';
        case 13:
            return 'Sé el cambio que esperas en tu vida';
        case 14:
            return 'Quiérete. A veces las cosas no salen como queremos y no pasa nada.';
    }
}

function imprimirMensaje($mensaje)
{
    echo '<p>' . $mensaje . '</p>';
}

function mandarAlert($mensaje)
{
    //Mando el mensaje en un alert. htmlspecialchars sirve para mandarlo correctamente y que el alert funcione
    echo "<script>
            alert('" . htmlspecialchars($mensaje, ENT_QUOTES) . "');
        </script>";
}
