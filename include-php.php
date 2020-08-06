<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include PHP Files</title>
</head>
<body>
    <?php 
        $title = "My First Post";
        $author = "Miranda";
        $wordCount = 4;
        include "article-header.php";

        echo "<br><br>";

        include "useful-tools.php";
        echo $metresInKilometre;
        echo "<br>";
        echo sayHello("Michael");
    ?>
</body>
</html>