<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Strings</title>
</head>
<body>
    <?php
    $phrase = "Giraffe Academy";
    echo strtolower("$phrase \n"); // Convert str to lowercase
    echo strtoupper("$phrase \n"); // Convert str to uppercase
    echo strlen($phrase); // Find length of str; 15
    echo "\n";
    echo $phrase[0]; // Find letter in index position of 0; G

    echo "<br>";

    $phrase[0] = "B"; // Change 1st letter to B
    echo $phrase; // Biraffe Academy
    echo "\n";
    echo str_replace("Biraffe", "Panda", $phrase); // Changing words; Panda Academy
    
    echo "<br>";
    
    echo substr($phrase, 8); // Cuts a part of a str starting from index 8; Academy
    echo "\n";
    echo substr($phrase, 8, 3); // Cuts 3 letters after index 8; Aca
    ?>
</body>
</html>