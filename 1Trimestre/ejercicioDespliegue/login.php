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
        <h1>Login</h1>
        <form method="post">
            <div class="inputDiv">
                <p>Nombre de usuario:</p>
                <input type="text" name="usuario" id="usuario" placeholder='usuario'>
            </div>

            <div class="inputDiv">
                <p>Contraseña:</p>
                <input type="password" name="contrasenia" id="contrasenia">
            </div>

            <button type="submit">Enviar</button>
        </form>

        <p>¿Nuevo usuario? <a href="crearUsuario.php">Crea una cuenta</a></p>


    </div>

</body>

</html>