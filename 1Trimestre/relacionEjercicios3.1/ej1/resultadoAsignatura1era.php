<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $diaSemana = $_POST['diaSem'];

            switch ($diaSemana){
                case 1: 
                    echo "El lunes a primera hora toca Desarrollo Web en Entorno Cliente";
                    break;
                case 2: 
                    echo "El martes a primera hora toca Desarrollo Web en Entorno Cliente";
                    break;
                case 3: 
                    echo "El miércoles a primera hora toca Desarrollo Web en Entorno Servidor";
                    break;
                case 4: 
                    echo "El jueves a primera hora toca Desarrollo Web en Entorno Servidor";
                    break;
                case 5: 
                    echo "El viernes a primera hora toca Diseño de Interfaces Web";
                    break;
                default:
                    echo "Ha habido un error inesperado";
            }
        ?>
    </p>
</body>
</html>