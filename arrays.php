<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        $friends = array("Austin", "Anna", "Aria", "Alice");
        echo $friends; // Array
        echo "\n";
        echo $friends[2]; // Aria
        echo "\n";
        
        $friends[2] = "Arif"; // Changing index 2 to Arif
        echo $friends[2]; // Arif
        echo "\n";

        $friends[10] = "Angela"; // Adding new item to array
        echo $friends[10];
        echo "\n";

        echo count($friends); // Counting no. of items in array; 5
    ?>
</body>
</html>