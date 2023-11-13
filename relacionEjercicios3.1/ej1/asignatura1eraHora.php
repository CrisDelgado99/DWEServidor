<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vamos a saber qué asignatura toca a primera hora</h1>
    <form action="resultadoAsignatura1era.php" method="post">
        <label for="">Seleccione un día de la semana:</label>
        <select name="diaSem" id="diaSem">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miércoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>