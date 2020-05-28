<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo -40.847;
        # suma
        echo("<br>");
        echo 5 + 9;
        # mod
        echo("<br>");
        echo 5 % 9;
        echo("<br>");
        # incrementando variables
        $num = 10;
        $num++;
        $num = $num + 1;
        $num += 1;
        echo $num;
        echo("<br>");
        # valor absoluto
        echo(abs(-100));
        echo("<br>");
        # exponentes 2^5
        echo(pow(2, 5));
        echo("<br>");
        # raiz cuadrada
        echo(sqrt(144));
        echo("<br>");
        # bigger number
        echo(max(2,10));

        echo("<br>");
        # min number
        echo(min(2,10));

        echo("<br>");
        # round
        echo(round(3.7));

        echo("<br>");
        # ceil
        echo(ceil(3.7));

        echo("<br>");
        # floor
        echo(floor(3.7));
    ?>
</body>
</html>