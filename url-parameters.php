<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Parameters</title>
</head>
<body>
    <form action="url-parameters.php" method="GET">
        Name: <input type="text" name="name"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php 
        echo $_GET["name"]; // name=... on URL
    ?>
</body>
</html>