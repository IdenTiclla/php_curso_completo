<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function get_max($num1, $num2, $num3){
            if ($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            }
            elseif ($num2 >= $num1 &&  $num2 >= $num3){
                return $num2;
            }
            else{
                return $num3;
            }
        }
        echo get_max(3,2,2);
    ?>
    
</body>
</html>