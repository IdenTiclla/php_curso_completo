<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="getting_user_input.php" method="GET">
        Name:<input type="text" name="username">
        <br>
        Age <input type="text" name="age">
        <input type="submit">
    </form>
    <br>

    Your name is: <?php echo $_GET["username"]?>
    <br>
    Your age is: <?php echo $_GET["age"]?>
</body>
</html>