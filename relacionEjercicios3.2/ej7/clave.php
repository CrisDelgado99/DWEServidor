<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>¿Cuál será la clave?</h1>

        <?php
            $claveCorrecta = 3333;
            if(!isset($_POST['intentos'])){
                $intentos = 4;
                $clave = -30;

            } else {
                $intentos = (int)$_POST['intentos'] - 1;
                $clave = $_POST['clave'];
            }
            
            echo '<p>Quedan ' . $intentos . ' intentos </p>'
        ?>

        <?php
            echo $intentos == 1 || $clave == $claveCorrecta;
            if($intentos == 1 || $clave == $claveCorrecta){
                $action = "resultadoClave.php";
            } else {
                $action = "clave.php";
            }
        ?>
        <form action="<?=$action?>" method="post">

            <input type="number" name="clave" id="clave">
            <input type="hidden" name="intentos" id="intentos" value="<?=$intentos?>">

            <button type="submit">Enviar</button>
            
        </form>
    </h1>
</body>
</html>