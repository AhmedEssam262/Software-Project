<?php    
        if(isset($_POST['button1'])) {
            session_destroy();
            header('location:login.php');
            exit();
    
        }
        ?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="home.css">
    </head>
<body>

    <form method="post">
        <input type="submit" name="button1"value="Logout" class="aa"/>
    </form>

</body>

<h1>Welcome to our website</h1>

</html>
