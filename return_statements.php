<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        function suma($num1, $num2){
            return $num1 + $num2;
        }
        function cube($num){
            return $num *  $num * $num;
        }

        $res = suma(1,2);
        echo "$res <br>";

        $res = cube(2);
        echo "$res <br>";
    ?>
    
</body>
</html>