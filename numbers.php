<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Numbers</title>
</head>
<body>
    <?php
        echo 40;
        echo "\n";
        echo -40;
        echo "\n";
        echo 40.777;

        echo "<br>";

        echo 5 + 9; // 14
        echo "\n";
        echo 5 - 9; // -4
        echo "\n";
        echo 5.7 * 9; // 51.3
        echo "\n";
        echo 10 % 3; // 1
        echo "\n";
        echo 4 + 5 * 10; // 54
        echo "\n";
        echo (4 + 5) * 10; // 90

        echo "<br>";

        $num = 10;
        $num++ ;
        echo $num; // 11
        echo "\n";
        $num = 10;
        $num-- ;
        echo $num; // 9
        echo "\n";

        $num = 10;
        $num += 25 ; // or -=, *=, /=
        echo $num; // 35

        echo abs(-100); // 100
        echo pow(2, 4); // 2^4 is 16
        echo sqrt(144); // 12
        echo max(2, 10); // 10
        echo min(2, 10); // 2
        echo round(3.2); // 3
        echo round(3.7); // 4
        echo ceil(3.3); // Always round down; 4
        echo floor(3.9); // Always round up; 3
    ?>
</body>
</html>