<html>
<!--
  PROJECT : BANK DATABASE MANAGEMENT SYSTEM
  PURPOSE : PHP to add a new customer.
  AUTHOR  : SAHIL ARORA
  DATE    : 18/10/15
  BUGS  : NONE
-->
<head>
<script type="text/javascript">
	function create(var name, var val){
		document.cookie = name + "=" + val;
		return true;
	}
</script>
</head>
<body>
<input type="button" onclick="create("hi","there");" value="cookiecreate">
<?php
echo date('Y-m-d H:i:s',time());
/*$servername = "localhost";
$username = "root";
$password = "admin";
echo md5($password);
$database="MYBANK";
$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn)
	die("Connection failed!<br>".mysqli_connect_error());
$name = $_POST['name'];
$address = $_POST['address'];
$phone =$_POST['phone'];
$query = "INSERT INTO CUSTOMERS VALUES($name,$address,$phone)";
mysqli_query($conn,$query);
echo "New Customer added successfully! Details of the new customer :<br>";
$query = "SELECT * FROM CUSTOMERS ORDER BY CustomerID DESC LIMIT 1";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result)) {
	echo "CustomerID : ".$row['CustomerID']."<br>";
	echo "Customer Name : ".$row['Name']."<br>";
	echo "Customer Address : ".$row['Address']."<br>";
	echo "Customer Name : ".$row['Phone']."<br>";
}
mysqli_close();
*/?>
</body>
</html>
