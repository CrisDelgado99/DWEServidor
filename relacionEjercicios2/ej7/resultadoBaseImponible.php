<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_POST['num'];
        $porcIVA = $_POST['porcIVA'];

        $resultado;

        if($porcIVA == 'pn'){
            $resultado = $num + $num * 0.04;
            echo '<p> Tu producto, con base imponible de ' . $num . '€ y que es de primera necesidad (IVA 4%), vale ' . $resultado . '€.';
        } else {
            $resultado = $num + $num * 0.21;
            echo '<p> Tu producto, con base imponible de ' . $num . '€ y que no es de primera necesidad (IVA 21%), vale ' . $resultado . '€.';
        }
    
    ?>
</body>
</html>