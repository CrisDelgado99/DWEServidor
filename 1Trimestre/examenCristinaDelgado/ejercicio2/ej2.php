<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Este es mi horario de clase:</h1>
    <?php
    include("./biblioteca/biblioDia.php");

        $arrHorario = [
            array("Lunes"=> "DWECliente", "Martes" => "DWECliente", "Miércoles" => "DWEServidor", "Jueves" => "DWEServidor", "Viernes" => "DInterfaces"),
            array("Lunes"=> "DWECliente", "Martes" => "DWECliente", "Miércoles" => "DWEServidor", "Jueves" => "DWEServidor", "Viernes" => "DInterfaces"),
            array("Lunes"=> "DWECliente", "Martes" => "DWECliente", "Miércoles" => "DInterfaces", "Jueves" => "DWEServidor", "Viernes" => "DInterfaces"),
            array("Lunes"=> "DWEServidor", "Martes" => "DAW", "Miércoles" => "DInterfaces", "Jueves" => "Empresa", "Viernes" => "Python"),
            array("Lunes"=> "DWEServidor", "Martes" => "DAW", "Miércoles" => "DInterfaces", "Jueves" => "Empresa", "Viernes" => "Python"),
            array("Lunes"=> "DWEServidor", "Martes" => "DAW", "Miércoles" => "Empresa", "Jueves" => "Empresa", "Viernes" => "Python"),
        ]
    
    ?>

    <table>
        <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>

        <?php
    
            $i = 0;

            foreach($arrHorario as $hora){
                echo "<tr>";
                echo "<th>" . elegirHora($i) . "</th>";
                echo "<td> " . $hora["Lunes"]. "</td>";
                echo "<td> " . $hora["Martes"]. "</td>";
                echo "<td> " . $hora["Miércoles"]. "</td>";
                echo "<td> " . $hora["Jueves"]. "</td>";
                echo "<td> " . $hora["Viernes"]. "</td>";

                $i++;
            }
        ?>

    </table>


</body>
</html>