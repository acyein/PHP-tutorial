<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>
<body>
    <?php
        // Cubes number
        function cube($num){
            return $num * $num * $num; // Return breaks out of the function
            echo "Hello world"; // This str never gets printed out
        }

        $cubed = cube(4);
        echo $cubed; // 64
    ?>
</body>
</html>