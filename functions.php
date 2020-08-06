<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <?php
        function sayHi($name){
            echo "Hello, $name! <br>";
        }

        sayHi("Milano"); // Hello, Milano!
        sayHi("Jimmy"); // Hello, Jimmy!
        sayHi("Orlando"); // Hello, Orlando!

        echo "<br>";

        // Passing in 2 parameters
        function sayHello($name, $age){
            echo "Hello, $name! You are $age. <br>";
        }

        sayHello("Milano", 20); // Hello, Milano! You are 20.
        sayHello("Jimmy", 18); // Hello, Jimmy! You are 18.
        sayHello("Orlando", 35); // Hello, Orlando! You are 35.
    ?>
</body>
</html>