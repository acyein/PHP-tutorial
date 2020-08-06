<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php
        $isMale = true; // Toggle to see different results
        $isTall = false; // Toggle to see different results
        if ($isMale && $isTall){ // Male AND tall
            echo "You are a tall male";
        } elseif ($isMale && !$isTall) { // Male AND not tall
            echo "You are a short male";
        } elseif (!$isMale && $isTall) { // Not male AND tall
            echo "You are not male but are tall";
        } else {
            echo "You are not male and not tall";
        }
    ?>
</body>
</html>