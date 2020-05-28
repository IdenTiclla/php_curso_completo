<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $title = "my first post";
        $author = "mike";
        $wordCount = 400;
        include "article-header.php";


        include "useful-tools.php";
        echo "<br>";
        echo "$var <br>";
        sayHi();

    ?>
</body>
</html>