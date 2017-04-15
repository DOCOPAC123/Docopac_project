<!DOCTYPE HTML>
<html>
	<head>
		<title>LOGIN TO DOCOPAC</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
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
	<body>

		<!-- Header -->
			<div id="header">
				<span class=""></span>
				<h1></h1>
				<p  ><h1>DOCOPAC</h1><br>Medical Record Automation System
				<br />
				Vinayak Sangar-Rohit Chauhan-Sahil Arora</p>
			</div>
	





		
				
				<div class="box container">
				
							<h3>Login to docopac for more details.</h3>
						</header>
						<form method="post" action="login.php">
							<div class="row">
								<div class="6u 12u(mobilep)">
									<label for="name">User Name</label>
									<input class="text" type="text" name="username" id="name" value="" placeholder="User Name" required/>
								</div>
								<div class="6u 12u(mobilep)">
									<label for="email">Password</label>									<input class="text" type="password" name="password" id="email" value="" placeholder="***************"  required/>                            
								</div>
								<div class="6u 12u">
									<label for="email">Doctor.</label>									<input class="text" type="radio" name="type" value="D"   required/>
								</div>
							<div class="row">
							
								<div class="12u">
									<label for="subject">Patient</label>
									<input class="text"  required type="radio" name="type" value="P"  />
								</div>
								<div class="6u 12u">
									<label for="email">Admin</label>									<input class="text" type="radio" name="type" value="A"    required/>
								</div>
								
							</div>
							</div>
							<div class="row">
				
							</div>
							<div class="row">
								<div class="12u">
									<ul class="actions">
										<li><input type="submit" value="Login" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>

		
	
	
			

				<footer class="major container 75%">
					<h3><a href="newpatient.php"  class="button">Click here</a> <br>to register as a patient, <br><br>or </h3>
					<h3><p><a href="newdoctor.php"  class="button">click here</a><br> to apply as a doctor!</p><h3>
					<ul class="actions">
						<li><a>Contacts:</a></li><br>
						<li><a>Rohit chauhan:123456789</a></li><br>
						<li><a>Sahil arora:123456786</a></li><br>	
						<li><a>Vinayak sangar:626727777</a></li><br>
					</ul>
				</footer>

			</div>

		

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
