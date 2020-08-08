<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters & Setters</title>
</head>
<body>
    <?php 
        class Movie {
            // public, private, var
            // public is a global variable and can be changed by anyone
            // private can only be changed inside the class
            public $title;
            private $rating;
            // Valid ratings: G, PG, PG-13, R, NR

            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            function setRating($rating){
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR";
                }
            }
        }
        
        $avengers = new Movie("Avengers", "Dog");
        // $avengers->setRating("Dog"); // Invalid rating
        echo $avengers->getRating(); // Invalid rating
    
    ?>
</body>
</html>