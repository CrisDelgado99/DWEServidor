<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notelink - Registro</title>
    <link rel="stylesheet" href="./css/modificar.css">
    <style>
        #verde{
            color: green;
        }

        #rojo{
            color: red;
        }
    </style>
</head>

<body>
    <div id="padrePopup">
        <div id="popup">
            <div>
                <h2>Crea tu cuenta en Notelink.</h2>
                <form action="registro.php" method="post">
                    <div>
                        <p>Usuario:</p>
                        <input type="text" name="inpUsuario" id="inpUsuario">
                    </div>

                    <div>
                        <p>Contraseña:</p>
                        <input type="password" name="inpPassword1" id="inpPassword1">
                    </div>

                    <div>
                        <p>Repite tu contraseña</p>
                        <input type="password" name="inpPassword2" id="inpPassword2">
                    </div>

                    <button type="submit">Enviar</button>
                    <p>¿Ya tienes cuenta en Notelink? <a href="./login.php">Accede</a></p>
                    <?php
                        if($boolMostrar){
                            echo $mensaje;
                        }
                    
                    ?>
                </form>

            </div>

        </div>
    </div>

</body>

</html>