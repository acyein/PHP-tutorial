<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatve Arrays</title>
</head>
<body>
    <form action="associative-arrays.php" method="POST">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php 
        // Storing in key, value pairs; remember -- keys need to be unique
        $grades = array("Jasmine"=>"A+", "Pamela"=>"B-", "Oscar"=>"C+");
        echo $grades[$_POST["student"]];
    ?>
</body>
</html>