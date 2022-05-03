<!DOCTYPE html>
<html lang="en">
    
    
<head>
    <title>Guest Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project.css">
    </head>


<body>
    <div class="text-box">
    <h1>Book Your Travel Now</h1>
    <p>
    Now you can book your travel with minimal cost and time just register and start new journey!    
    </p>
  </div>
    
<form method="POST" name="register" action="">
    <div class="login">
        <label for="email" id="email" >E-mail</label>
        <input type="email" name="username" placeholder="Enter your E-mail" id="inpass">


        <label for="Password" id="password" >Password</label>
        <input type="password" name="password" placeholder="Enter your Passwoed" id="inpass">

        <br>
        <input type="submit" id="sub3" name="login" value="login">
        <br><br><br><br>
        <div id="sub1">Don't have an account?</div>
        <button id="sub0"><a href="newregister.php" target='_self'>Sign Up</a></button>
    </div>
    
</form>
    </body>
    
    
    
</html>
<?php
$dsn = 'mysql:host=localhost;dbname=software'; //Data source Name
$username = 'root';
$password = '';
$options = array(PDO::MYSQL_ATTR_INIT_COMMAND=> 'SET NAMES utf8');

 $conn = new PDO($dsn, $username, $password,$options);



 session_start();
if(!empty($_SESSION['username'])) {
        echo '<script>window.location.replace("index.php")</script>';

}


if(isset($_POST['login'])) {

$user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) || empty($pass)) {
$message = 'All field are required';
} else {
$query = $conn->prepare("SELECT username, password FROM guests WHERE 
username=? AND password=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
  $_SESSION['username'] = $user;
  header('location:home.php');
  session_destroy();


} else {
  $message = "Username/Password is wrong";
}


}

}
 ?>
