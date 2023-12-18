<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/modificar.css">
</head>

<body>
    <div id="padrePopup">
        <div id="popup">
            <div>
                <h2>Accede a tu cuenta en Notelink.</h2>
                <form action="login.php" method="post">
                    <div>
                        <p>Usuario:</p>
                        <input type="text" name="inpUsuario" id="inpUsuario">
                    </div>

                    <div>
                        <p>Contraseña:</p>
                        <input type="password" name="inpPassword1" id="inpPassword1">
                    </div>

                    <button type="submit">Enviar</button>

                </form>

                <p>¿No tienes cuenta en Notelink? <a href="./registro.php">Regístrate</a></p>
            </div>
        </div>
    </div>



</body>

</html>