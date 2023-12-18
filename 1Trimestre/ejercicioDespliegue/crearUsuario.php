<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div id="main">
        <h1>Crear usuario</h1>
        <form method="post">
            <div class="inputDiv">
                <p>Nombre de usuario:</p>
                <input type="text" name="usuario" id="usuario" placeholder="usuario">
            </div>

            <div class="inputDiv">
                <p>Contraseña:</p>
                <input type="password" name="contrasenia" id="contrasenia">
            </div>

            <div class="inputDiv">
                <p>Repite la contraseña:</p>
                <input type="password" name="contrasenia2" id="contrasenia2">
            </div>

            <button type="submit">Enviar</button>
        </form>

        <p>¿Tienes cuenta? <a href="login.php">Accede a tu cuenta</a></p>
        
    </div>

</body>

</html>