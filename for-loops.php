<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <?php
        // While loop
        // $index = 1;
        // while($index <= 5){
        //     echo "$index <br>";
        //     $index++;
        // }

        // For loop (var; loop condition; line of code to be executed after each iteration)
        $index = 1;
        for($i = 1; $i <=5; $i++){
            echo "$i <br>"; // 1 2 3 4 5
        }
        
        echo "<br>";

        $luckyNumbers = array(4, 8, 14, 16, 23, 42);
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>"; // 4 8 14 16 23 42
        }
    ?>
</body>
</html>