<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$conn = mysqli_connect('localhost','DOCOPAC','dexter','hospital');
	if(!$conn)
		die("Connection failed!<br>".mysqli_connect_error());
	$cookiename = md5('a');
	if(isset($_COOKIE[$cookiename])){
		$query = "DELETE from adddoctor";
		$result = mysqli_query($conn,$query);
		echo "All queries successfully revoked. Redirecting you back to home page..";
		echo "<meta http-equiv=\"refresh\" content=\"5;URL=admin.php\" />";
	}
	else{
		echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page.";
		echo "<meta http-equiv=\"refresh\" content=\"5;URL=login.html\" />";
	}
	?>
</body>
</html>