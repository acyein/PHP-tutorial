<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST</title>
</head>
<body>
    <!-- Using POST hides URL paraments with senstive info e.g. user's password -->
    <form action="get-and-post.php" method="POST"> 
        Password: <input type="password" name="password"> <br>
        <input type="submit">
    </form>
    <br><br>

    <?php 
        echo $_POST["password"]; // Password is not shown
    ?>
</body>
</html>