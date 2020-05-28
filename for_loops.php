<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $numbers = array(4, 3, 2, 1, 2, 3);
        for ($i = 0; $i < count($numbers); $i++){
            echo "$numbers[$i] <br>";
        }
    
    ?>
</body>
</html>