<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting User Input</title>
</head>
<body>
    <form action="user-input.php" method="GET">
        Name: <input type="text" name="username">
        <br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    Your name is <?php echo $_GET["username"] ?>.
    <br>
    Your age is <?php echo $_GET["age"] ?>.
</body>
</html>