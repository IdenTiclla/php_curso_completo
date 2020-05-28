<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book{
            # variables
            var $title;
            var $author;
            var $pages;

            # constructor
            function __construct($title, $author, $pages){
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }

        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book2 = new Book("Lord of the rings", "Tolkiem", 600);
        
        echo $book1->title;
        echo "<br>";
        echo $book1->author;
        echo "<br>";
        echo $book1->pages;
        echo "<br>";
    
    ?>
</body>
</html>