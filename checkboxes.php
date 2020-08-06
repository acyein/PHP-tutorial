<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Checkboxes</title>
</head>
<body>
    <form action="checkboxes.php" method="POST">
        <!-- Easier to deal with user input if we put them in an array -->
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br> 
        Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
        Watermelon: <input type="checkbox" name="fruits[]" value="watermelon"><br>
        <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0]; // Outputs 1st fruit selected
    ?>
</body>
</html>