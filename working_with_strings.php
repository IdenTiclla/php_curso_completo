<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $phrase = "Giraffe Academy";
        echo(strtolower($phrase));
        echo("<br>");
        echo(strtoupper($phrase));
        echo("<br>");
        $longitud = strlen($phrase);
        echo("longitud: $longitud");
        echo("<br>");
        $first_ch = $phrase[0];
        $last_ch = $phrase[strlen($phrase) - 1];
        echo("First character: $first_ch");
        echo("<br>");
        echo("Last character: $last_ch");
        echo("<br>");
        echo str_replace("Giraffe","Panda", $phrase);
        echo("<br>");
        echo substr($phrase, 8, 3);

    ?>  
</body>
</html>