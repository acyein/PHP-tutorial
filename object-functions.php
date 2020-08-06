<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
</head>
<body>
    <?php
        class Student {
            var $name;
            var $major;
            var $gpa;

            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

             // Places student on Honour Roll if their GPA is/more than 3.5
            function hasHonours(){
                if($this->gpa >= 3.5){
                    return "true";
                }
                return "false";
            }
        }

        $student1 = new Student("Jerry", "Business", 2.8);
        $student2 = new Student("Paula", "Art", 3.6);
        
        echo $student1->hasHonours(), "<br>"; // false
        echo $student2->hasHonours(); // true

    ?>
</body>
</html>