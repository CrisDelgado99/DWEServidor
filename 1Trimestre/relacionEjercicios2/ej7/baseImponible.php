<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultadoBaseImponible.php" method="post">
        <h2>Calculemos el precio a partir de la base imponible</h2>
        <label for="">¿Cuál es la base imponible de tu producto?</label>
        <input type="text" name="num" id="num">

        <label for="">¿Es un producto de primera necesidad?</label>
        <select name="porcIVA" id="porcIVA">
            <option value="pn">Primera necesidad</option>
            <option value="norm">IVA normal</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>