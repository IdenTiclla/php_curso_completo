<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo("<h1>Hello world!</h1>");
        echo("<hr>");
        echo("<p>This is my site</p>");
        #variables
        $name = "Jhon";
        $age = 11;
        echo("There once was a man named $name <br>");
        echo("He was $age years old <br>");
        echo("He really liked the name $name <br>");
        echo("But didn't like being $age <br>");
        # data types
        # string
        $frase = "Hola mundo";
        # integer
        $age = 41;
        #decimal numbers floats
        $promedio = 30.3;
        # boolean
        $esHombre = true;
        echo("<br>");
        # working with strings
        $phrase = "Giraffe Academy";
        echo(strtolower($phrase));
        echo(strtoupper($phrase));
    ?>  
</body>
</html>