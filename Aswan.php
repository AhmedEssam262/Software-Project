<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="project.css">
	<title>Aswan</title>
</head>
<body>
<section class="aswhead">
       <a href= "index.html"><img src="images/ssew.png"></a>
 <div class= "summbit">
	 <div>
	<form action ="" method="POST">
		<label for="">Choose Hotel</label>
		<select name="hotel">
			<option value="Hapi Hote">Hapi Hote</option>
			<option value="Sofitel Legend Old Cataract">Sofitel Legend Old Cataract</option>
			<option value="Citymax Hotel Aswan">Citymax Hotel Aswan</option>
			<option value="Pyramisa Island Hotel Aswan ">Pyramisa Island Hotel Aswan</option>
			<option value="Cleopatra Hotel">Cleopatra Hotel</option>
		</select>

		<label for ="Time">Choose Time</label>
		<select name="time">
			<option value = "2">2:00</option>
			<option value = "4">4:00</option>
			<option value = "6">6:00</option>
			<option value = "8">8:00</option>
			<option value = "10">10:00</option>
			<option value = "12">12:00</option>
			<option value = "14">14:00</option>
			<option value = "16">16:00</option>
			<option value = "18">18:00</option>
			<option value = "20">20:00</option>
			<option value = "22">22:00</option>
			<option value = "24">24:00</option>
		</select>
		<button type="submit" name="submit">Submit</button>
		<button type="submit" name="delete">Delete Reservation</button>
	</form>
</section>
</body>
</html>

<?php

	$con = mysqli_connect("localhost","root","","reservation");

	session_start();
	if(!isset($_SESSION['home'])) {
	$_SESSION['home']="";
	$_SESSION['tempEmail']="";
	}

	if ($con->connect_error) 
	{
  		die("Connection failed: " . $con->connect_error);
	}

	if(isset($_POST['submit']))
	{
		$hotel = $_POST['hotel'];
		$time = $_POST['time'];

		$sql = mysqli_query($con,"SELECT * FROM `items` WHERE completed= 1");
		$sql = mysqli_fetch_assoc($sql);
		$Checker = isset($sql['completed']);

		if  ($Checker == null) 
		{

			$query = "INSERT INTO items(city,hotel,time,completed) VALUES('Aswan','$hotel','$time',1)";
			$query_run = mysqli_query($con,$query);

			if($query_run){
				echo '<script type="text/javascript"> alert("Data Saved") </script>';
			}

			else
			{
				echo '<script type="text/javascript"> alert("Data Not Saved") </script>';
			}
		}		  		    
		else 
		{

		    echo '<script type="text/javascript"> alert("Reservation has already been made") </script>';
		}

	}

	if(isset($_POST['delete']))
	{
		$sql = mysqli_query($con,"SELECT * FROM `items` WHERE completed= 1");
		$sql = mysqli_fetch_assoc($sql);
		$Checker = isset($sql['completed']);

		if  ($Checker != null)
		{
			$sql = "DELETE FROM items WHERE completed= 1";
			if ($con->query($sql) === TRUE)
			{
			echo '<script type="text/javascript"> alert("Record deleted successfully") </script>';
			}
			else
			{
				 echo "Error deleting record: " . $conn->error;
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("There is no Data") </script>';
		}
	}
	 session_destroy();
?>	