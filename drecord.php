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
<h1>All records of patients under you</h1>
	<table class="table" border="5px" align="center" width="600" cellspacing="1" cellpadding="1">
		<tr>
			<th >Record Id</th>
			<th >Time</th>
			<th >Patient Username</th>
			<th >Patient Name</th>
			<th >Problem</th>
			<th >Prescription</th>
			<th >Test Recommended</th>
			<th >Medicines Prescribed</th>
		</tr>
		<?php
		$conn = mysqli_connect('localhost','DOCOPAC','dexter','hospital');
		if(!$conn)
			die("Connection failed!<br>".mysqli_connect_error());
		$cookiename = md5('d');
		if(isset($_COOKIE[$cookiename])){
			$username = $_COOKIE['username'];
			$query = "select * from record,pdmap WHERE record.dusername = '$username' and record.pusername = pdmap.pusername and record.dusername = pdmap.dusername";
			$result = mysqli_query($conn,$query);
			while($transaction=mysqli_fetch_assoc($result)){
				$pusername = $transaction['pusername'];
				echo "<tr>";
				echo "<td class=\"success\">".$transaction['rid']."</td>";
				echo "<td class=\"info\">".$transaction['rtime']."</td>";
				echo "<td class=\"warning\">".$transaction['pusername']."</td>";
				$query2 = "select * from patient where pusername = '$pusername'";
				$result2 = mysqli_query($conn,$query2);
				while($res2 = mysqli_fetch_assoc($result2))
					echo "<td>".$res2['pfname']." ".$res2['pmname']." ".$res2['plname']."</td>";
				echo "<td class=\"success\">".$transaction['subject']."</td>";
				echo "<td class=\"info\">".$transaction['prescription']."</td>";
				echo "<td class=\"warning\">".$transaction['test']."</td>";
				echo "<td class=\"danger\">".$transaction['medicinelist']."</td>";
				echo "</tr>";
			}
		}
		else{
			echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page.";
			echo "<meta http-equiv=\"refresh\" content=\"5;URL=login.html\" />";
		}	
		?>
		</table>
		<br><a href="doctor.php"><h3>Go back to your home page</h3></a><br>
		<a href="logout.php">Logout</a>
	</center>
	</body>
	</html>