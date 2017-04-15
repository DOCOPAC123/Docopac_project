<html>
<head>

    <title>PATIENT PORTAL</title>
    
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <style>
 {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
}   
</style>
            </head>
    <body>
    <center>
         <h1>Remove Doctor</h1>
                            <br><br>
                <div class = "container">
                                   <form method="post" action="doctorremove.php" name="myform">
                                       <b><b><b><b><b>Select a doctor from a list of available doctors to remove:</b></b></b></b></b> </font>
                        <select name="dusername">
                            <?php
                            $conn = mysqli_connect('localhost','DOCOPAC','dexter','hospital');
                            if(!$conn)
                                die("Connection failed!<br>".mysqli_connect_error());
                            $cookiename = md5('p');
                            if(isset($_COOKIE[$cookiename])){
                                $username = $_COOKIE['username'];
                                $query = "select * from doctor,pdmap where pusername = '$username' and doctor.dusername = pdmap.dusername";
                                $result = mysqli_query($conn,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='" . $row['dusername'] . "'>" . $row['dfname'] . " ".$row['dmname']." ".$row['dlname']." - ".$row['department'] ."</option>";
                                }
                                echo "</select>(No option signifies you don't have any Doctor assigned to you)<br>";
                              
                            }
                            else{
                                echo "YOU HAVE BEEN LOGGED OUT.<br>Redirecting you back to Login Page.";
                                echo "<meta http-equiv=\"refresh\" content=\"5;URL=login.html\" />";
                            }
                            ?>
                                                        <br></div></div>
                            <input type="submit" name="submit" value="submit"/>
                            <input type="reset" name="reset" value="reset"/><br>
                            <br><a href="patient.php"><h3>Go back to your home page</h3></a><br>
                            <a href="logout.php">Logout</a>
                            
                        </form>
                                      
                </div>
           
        <br>
   
</center></body>
</html>i