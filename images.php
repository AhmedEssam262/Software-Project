<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="project.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
	<style>
		{
			box-sizing: border-box;
		}
		.column{
			float: left;
			width: 32.60%;
			padding: 5px;
			margin-top: 150px;
		}
		.column input{
			height: 300px;
		}

	</style>
	
	<title>Home Page</title>
</head>
<body>
	
	<section class="Trav">
	<nav>
       <a href= "index.html"><img src="images/ssew.png"></a>
       <div class="nav-links">
         <ul>
            <li><a href="#">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Features</a></li>
            <li><a href="">Contact</a></li> 
         </ul>
    </div>
	<form method="post">
        <input type="submit" name="button1"value="Logout" class="logout"/>
    </form>
	<?php      
        session_start();
        echo '
        <h4 style="font-size: 12px; color : azure; float: left;margin: 5px 20px ">'. $_SESSION['username'].
        '</h4>
        ';
       // echo  'Welcome' . $_SESSION['username'];

        if(isset($_POST['button1'])) {
            session_destroy();
            header('location:login.php');
            exit();
    
        }
	?>
     </nav>
  <div class="text-box">
    <h1>Book Your Travel Now</h1>
    <p>
    Now you can book your travel with minimal cost and time</p>
	</div>
	
	<div class="row">
		<div class="column">
		<div class="layer">
				<h3>Alex</h3>
	        </div>	
			<a href="Alexandria.php" >
				<input type="image" src="https://www.egypttoursportal.com/images/2017/11/Alexandria-City-Egypt-Egypt-Tours-Portal.jpg" 
				name = "Alexandria" value = "Alexandria" width="100%">
			</a>
		</div>
		<div class="column">
			<a href="Aswan.php">
				<input type="image" src="https://www.planetware.com/photos-large/EGY/egypt-aswan-day-trip-abu-simbel.jpg" name = "Aswan"
				 value = "Aswan" width="100%">
			</a>
			<div class="layer">
				<h3>Aswan</h3>
	        </div>	
		</div>
		<div class="column">
			<a href="Sharm el-Sheikh.php">
				<input type="image" src = "https://imagesawe.s3.amazonaws.com/articles/2021/05/sharm_el_sheikh_honeymoon_0.jpg" 
				name="sharm el sheikh" value ="sharm el sheikh" width="100%">
			</a>
			<div class="layer">
				<h3>Sharm El Sheikh</h3>
	        </div>	
		</div>
	</div>
	<!--More HTML-->
	<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
		Welcome to Egypt<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
		English</b></span></h4>
      </div>
      <div class="item">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
		Willkommen in Ägypten<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  Deutsch</b></span></h4>
      </div>
      <div class="item">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  французский язык<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  русский</b></span></h4>
      </div><div class="item">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  benvenuto in Egitto<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">italiano</b></span></h4>
      </div><div class="item">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
		bienvenue en Egypte<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  française</b></span></h4>
      </div>
      <div class="item">
        <h4 style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  مرحباَ بك في مصر<br><span><b style="  text-shadow: 2px 2px azure;font-size: 40px;line-height: 1.375em;font-weight: 400;font-style: italic;margin: 70px 0;">
  العربية</b></span></h4>
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  <br><br><br>
</body>
</html>
