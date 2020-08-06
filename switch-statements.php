<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <form action="switch-statements.php" method="POST">
        <input type="text" name="grade">
        <input type="submit">
    </form>
    <br>
    <?php
    $grade = $_POST["grade"];
    switch($grade){ // switch is similar to if statement but is useful for comparing between different values
        case "A":
            echo "You did amazing!";
            break; // Gets out of programming structure
        case "B":
            echo "You did pretty good!";
            break;
        case "C":
            echo "You did poorly.";
            break;
        case "D":
            echo "You did very bad.";
            break;
        case "F":
            echo "You failed!";
            break;
        default: // If above conditions are not met
            echo "Invalid grade";
    }
    
    ?>
</body>
</html>