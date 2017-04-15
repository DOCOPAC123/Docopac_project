<!DOCTYPE html>

<html>
<head>
	<title>table</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<center>
<h1>Patient Specific Record</h1>
	<table class="table" border="5px" align="center" width="600" cellspacing="1" cellpadding="1">
		<tr>
			<th >Record Id</th>
			<th >Time</th>
			<th >Patient Username</th>
			<th >Patient Name</th>
			<th >Problem</th>
			<th>Prescription</th>
			<th >Test Recommended</th>
			<th >Medicines Prescribed</th>
		</tr>
		<?php
		$conn = mysqli_connect('localhost','DOCOPAC','dexter','hospital');
		if(!$conn)
			die("Connection failed!<br>".mysqli_connect_error());
		$cookiename = md5('d');
		if(isset($_COOKIE[$cookiename])){
			$dusername = $_COOKIE['username'];
			$pusername = $_POST['pusername'];
			$query = "SELECT * FROM patient,record where record.dusername = '$dusername' and record.pusername = '$pusername' and record.pusername = patient.pusername";
			$result = mysqli_query($conn,$query);
			while($transaction=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td class=\"success\">".$transaction['rid']."</td>";
				echo "<td class=\"info\">".$transaction['rtime']."</td>";
				echo "<td class=\"warning\">".$transaction['pusername']."</td>";
				echo "<td>".$transaction['pfname']." ".$transaction['pmname']." ".$transaction['plname']."</td>";
				echo "<td class=\"success\">".$transaction['subject']."</td>";
				echo "<td class=\"info\">".$transaction['prescription']."</td>";
				echo "<td class=\"warning\">".$transaction['test']."</td>";
				echo "<td class=\"danger\">".$transaction['medicinelist']."</td>";
				echo "</tr>";
			}
			echo "</table><br>";
			echo "<br><a href=\"dprecord.php\"><h3>Check another record</h3></a><br>";
			echo "<a href=\"doctor.php\"><h3>Go Back to your Home Page</h3></a><br>";
			echo "<a href=\"logout.php\">Logout</a>";

		}
		else{
			echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page.";
			echo "<meta http-equiv=\"refresh\" content=\"5;URL=login.html\" />";
		}	

		?>
		</center>
	</body>
	</html>