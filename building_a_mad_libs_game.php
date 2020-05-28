<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="building_a_mad_libs_game.php" method="GET">
        color: <input type="text" name="color"> <br>
        pluralNoun: <input type="text" name="pluralNoun"> <br>
        celebrity: <input type="text" name="celebrity"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses ared $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    
    ?>

</body>
</html>