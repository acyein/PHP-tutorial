<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements Continued</title>
</head>
<body>
    <?php
        // Function that finds max number between 2 numbers
        // function getMax($num1, $num2){
        //     if($num1 > $num2){
        //         return $num1;
        //     } else {
        //         return $num2;
        //     }
        // }
        //
        // echo getMax(2, 88); // 88

        // Function that finds max number between 3 numbers
        function getMax($num1, $num2, $num3){
            if($num1 >= $num2 && $num1 >= $num3){
                return $num1;
            } elseif($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            } else {
                return $num3;
            }
        }

        echo getMax(555, 9281, 193); // 9281
    ?>
</body>
</html>