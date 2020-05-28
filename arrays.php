<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php              # 0      1    2     3       4        5
        $array = array("Kevin", 1, true,"Karen", "Oscar", "Jim");
        $array[3] = "Dwight";
        $array[6] = 400;

        for ($i=0; $i < 7 ; $i++) { 
            # code...
            echo($array[$i]);
            echo "<br>";
        }
        $cantidad_elementos = count($array);
        echo "La cantidad de elementos es: $cantidad_elementos";
    ?>
    
</body>
</html>