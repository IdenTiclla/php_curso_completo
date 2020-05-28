<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="building_a_basic_calculator.php" method="GET">
        Num1: <input type="number" name="num1">
        <br>
        Num2: <input type="number" name="num2">
        <br>
        <input type="submit">
    </form>
    
    Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>
</body>
</html>