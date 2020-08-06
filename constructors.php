<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>
<body>
    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;

            // Constructor
            function __construct($aTitle, $aAuthor, $aPages){
                // "this" refers to the object
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "J.K. Rowling", 1000);
        $book1->title = "Hunger Games";
        $book2 = new Book("Lord Of The Rings", "Tolkien", 1203);

        echo $book1->title, "<br>"; // Hunger Games
        echo $book2->title, "<br>", $book2->pages; // Lord Of The Rings 1203
    ?>
</body>
</html>