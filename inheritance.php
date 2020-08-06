<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
        class Chef {
            function makePotatoSalad(){
                echo "The chef makes potato salad <br>";
            }
            function makeSushi(){
                echo "The chef makes sushi <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes pumpkin soup <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "The chef makes pasta <br>";
            }
            function makeSpecialDish(){ // Overwriting a function
                echo "The chef makes avocado arrabiata";
            }
        }

        $chef = new Chef();
        $chef->makePotatoSalad(); // The chef makes potato salad
        $chef->makeSpecialDish(); // The chef makes pumpkin soup

        echo "<br>";

        $ItalianChef = new ItalianChef();
        $ItalianChef->makeSushi(); // The chef makes sushi
        $ItalianChef->makePasta(); // The chef makes pasta
        $ItalianChef->makeSpecialDish(); // The chef makes avocado arrabiata
    ?>
</body>
</html>