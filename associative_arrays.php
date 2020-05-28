<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
    name: <input type="text" name="name"><br>
    <input type="submit">
    </form>

    <?php
        $grades = array("Jim"=>"A+", "Jhon"=> "B", "Oscar"=>"C+");
        echo  $grades[$_POST["name"]];
    
    ?>
</body>
</html>