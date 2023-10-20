<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $arrNumAl = [];

    for ($i = 0; $i < 100; $i++) {
        $arrNumAl[$i] = rand(0, 20);
    }

    $stringNums = implode(' ', $arrNumAl);

    ?>

    <h1>Elige los números que quieres sustituir</h1>

    <p>Los números generados han sido:</p>
    <p><?= $stringNums ?></p>

    <form action="resultadoCambNumeros.php" method="post">

        <label for="">Número que quieres sustituir (0-20)</label>
        <input type="number" name="num1" id="num1">

        <br>


        <label for="">Número por el que lo quieres sustituir (0-20)</label>
        <input type="number" name="num2" id="num2">

        <br>

        <input type="text" name="stringNums" id="stringNums" value="<?= $stringNums ?>" hidden>

        <button type="submit">Enviar</button>
    </form>


</body>

</html>