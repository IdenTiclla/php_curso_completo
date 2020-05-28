<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Movie{
            public $title;
            private $rating; # modificadores de visibilidad. public open to everybody

            function __construct($title, $rating){
                $this->title = $title;
                #$this->rating = $rating;
                $this->setRating($rating);
            }
            # getters and setters
            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                }
                else{
                    $this->rating = "NR";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        // only accept G PG PG-13 R NR    
        $avengers->setRating("dog");

        echo $avengers->getRating();
        
    ?>
    
</body>
</html>