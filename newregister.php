<?php
define('BASEPATH', true); //access connection script if you omit this line file will be blank

$user= 'root';                                                              // The User To Connect
$pass ='';                     
$dbname = 'software';


if(isset($_POST['register'])){  
        try {
            $dsn = new PDO("mysql:host=localhost;dbname=$dbname", $user, $pass);
            $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $user = $_POST['username'];
         $pass = $_POST['password'];
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];

         //$pass = password_hash($pass, PASSWORD_BCRYPT, array("cost" => 12));
          
         //Check if username exists
         $sql = "SELECT COUNT(username) AS num FROM guests WHERE username =:username";
           $stmt = $dsn->prepare($sql);

         $stmt->bindValue(':username', $user);
         $stmt->execute();
         $row = $stmt->fetch(PDO::FETCH_ASSOC);

         if($row['num'] > 0){
            echo '<div font-size: 400px>Username already exists</div>';
        }
        
       else{

    $stmt = $dsn->prepare("INSERT INTO guests (username, fname,lname, password) 
    VALUES (:username,:fname,:lname, :password)");
    $stmt->bindParam(':username', $user);
    $stmt->bindParam(':fname', $fname);
    $stmt->bindParam(':lname', $lname);
    $stmt->bindParam(':password', $pass);
    
    

   if($stmt->execute()){
    echo '<script>alert("New account created.")</script>';
    //redirect to another page
    echo '<script>window.location.replace("login.php")</script>';
     
   }else{
       echo '<script>alert("An error occurred")</script>';
   }
}
}catch(PDOException $e){
    $error = "Error: " . $e->getMessage();
    echo '<script type="text/javascript">alert("'.$error.'");</script>';
}
     }
?>


<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="project.css">
    </head>
<body>
<section class="hea">
     <nav>
       <a href= "index.html"><img src="images/ssew.png"></a>
    </section>  
<form method="POST" name="register" action="newregister.php">
    <div class="regiser">
        <label for="fname" id="fname"  >First Name</label>
        <input type="text" name="fname" placeholder="Enter your First Name" id="inname">
        
        <label for="lname" id="fname" >Last Name</label>
        <input type="text" name="lname" placeholder="Enter your Lastt Name" id="inname">

        <label for="email" id="email" >E-mail</label>
        <input type="email" name="username" placeholder="Enter your E-mail" id="email">

        <label for="Password" id="password" >Password</label>
        <input type="password" name="password" placeholder="Enter your Passwoed" id="inpass">
        <br>
        <input type="submit" id="sub2" name="register">Register</input>
        <br><br><br>

        <div id="sub1">Or</div>
        <button id="sub0"><a href="login.php" target='_self'>Login</a></button>
        <?php
        ?>
    </div>
</form>
    </body>    
</html>

