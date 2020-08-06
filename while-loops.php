<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>
    <?php
        // While loop: check condition before executing code; more commonly used
        // $index = 1;
        // while($index <= 5){ // Loop condition
        //     // Loop body
        //     echo "$index <br>"; // 1 2 3 4 5
        //     $index++;
        // }

        // Do While loop: execute code before checking condition
        $index = 6;
        do{
            echo "$index <br>"; // 6
            $index++;
        } while($index <= 5);
    ?>
</body>
</html>