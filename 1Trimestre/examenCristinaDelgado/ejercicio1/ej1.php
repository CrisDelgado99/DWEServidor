<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Reto FizzBuzz:</h1>
    <?php
        for($i = 1; $i <= 100; $i++){
            if($i%3 == 0 && $i%5 == 0){
                echo "<p style=\"color:red;\">FizzBuzz</p>";
            } elseif($i%3 == 0){
                echo "<p style=\"color: green;\">Fizz</p>";
            } elseif($i%5 == 0){
                echo "<p style=\"color: blue;\">Buzz</p>";
            } else {
                echo "<p>" . $i . "</p>";
            }
        }

    ?>
</body>

</html>