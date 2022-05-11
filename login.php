 <!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Guest Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="style.css">
    </head>


<body>
     <section class="head">
       <a href= "#"><img src="images/ssew.png"></a>
     </section> 
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

 $sql = "CREATE TABLE guests   (
	id INTeger(11)  AUTO_INCREMENT PRIMARY KEY,
	username varchar(25) not NULL,
	fname varchar(20) not NULL,
	lname varchar(20) not NULL,
	password varchar(25) not NULL,
	city varchar(35),
  hotel varchar(50),
  time integer(20),
  completed tinyint(1),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

  )";

  // use exec() because no results are returned
  
  try{
  $conn->exec($sql);
  }
  catch(PDOException $e){
  }
// session_start();
if(!empty($_SESSION['username'])) {
        echo '<script>window.location.replace("index.php")</script>';
}

$conn = null;

if(isset($_POST['login'])) {

 $user = $_POST['username'];
$pass = $_POST['password'];

if(empty($user) || empty($pass)) {
echo  '
<div class="feedback">
    All fields are required. <br />
    Please check the fields above.
</div>
';
} else {
  $conn = new PDO($dsn, $username, $password,$options);
$query = $conn->prepare("SELECT username, password FROM guests WHERE 
username=? AND password=? ");
$query->execute(array($user,$pass));
$row = $query->fetch(PDO::FETCH_BOTH);

if($query->rowCount() > 0) {
    session_start();
  $_SESSION['username'] = $user;
  header('location:images.php');

} else {
  $message = "Username/Password is wrong";
  echo '
  <div class="feedback">
        Username/Password is wrong

  </div>
  ';
}


}

}
?>