<!DOCTYPE html>

<html>
<head>
	<title>table</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>
<center>
<h1>Patient Specific Record</h1><br><br><br>
	Select patient's username from the list of patients under you whose record you want to see :<br>
	<form  method="post" action = "dprecorddisplay.php">
	
	<?php
	$conn = mysqli_connect('localhost','DOCOPAC','dexter','hospital');
	if(!$conn)
		die("Connection failed!<br>".mysqli_connect_error());
	$cookiename = md5('d');
	if(isset($_COOKIE[$cookiename])){
		$username = $_COOKIE['username'];
		$query = "SELECT pusername FROM pdmap where pdmap.dusername = '$username'";
		$result = mysqli_query($conn,$query);
		echo "<select name='pusername'>";
		while ($row = mysqli_fetch_assoc($result))
			echo "<option value=\"" . $row['pusername'] . "\">" . $row['pusername'] . "</option>";
		echo "</select><br>(No option signifies you don't have any patient under you)<br>";
	}
	else{
			echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page.";
			echo "<meta http-equiv=\"refresh\" content=\"5;URL=login.html\" />";
		}	
	?>
	<input type = "submit" value="View Records">
	</form> 
	<br><a href="doctor.php"><h3>Go back to your home page</h3></a><br>
	<a href="logout.php">Logout</a></center>
</body>
</html>