<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes & Objects</title>
</head>
<body>
    <?php 
        // Classes are custom data types
        class Book{ // Naming convention: start with capital letter
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book; // An object is created, i.e. it is an instance of a class
        $book1->title = "Harry Potter";
        $book1->author = "J.K. Rowling";
        $book1->pages = 1000;

        $book2 = new Book;
        $book2->title = "Lord Of The Rings";
        $book2->author = "Tolkien";
        $book2->pages = 1203;

        echo $book1->title; // Harry Potter
        echo "<br>";
        echo $book2->author; // Tolkien
    ?>
</body>
</html>