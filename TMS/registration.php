<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- fav-icon -->
	<link rel="icon" href="image/fav.ico" type="image/gif" sizes="25x25"> 

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Online bootstarp CDN -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Averia+Sans+Libre&display=swap" rel="stylesheet">

	<!-- icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<!-- offline bootstarp -->

	<link rel="stylesheet" href="file:///F:/CSE%20Related%20Software/Bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="file:///F:/CSE%20Related%20Software/Bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="home.css">

	<!-- login script & CSS -->
	<link rel="stylesheet" type="text/css" href="home_login.css">
	<link rel="stylesheet" type="text/css" href="registration.css">


	<title>Trip-mania</title>

</head>
<!-- id="bdy" -->
<body> 
	<form action="register_info_insert.php" method="POST">
		<div class="container">
			<h2 align="center">Sign Up</h2>
			<p align="center">Please fill in this form to create an account.</p>
			<hr>

            <label for="name"><b>Name</b></label>
			<input type="text" placeholder="Enter Name" name="name" required>

			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="psw" required>

			<label for="psw-repeat"><b>Repeat Password</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

			<label>
				<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			</label>

			<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			<div class="clearfix">
				<a href="home.php"><button type="button" class="cancelbtn btn btn-info btn-sm " >Cancel</button></a>
                
				<a><button type= "submit" name="sign-up-btn" class="signupbtn btn btn-info btn-sm ">Sign-up</button></a>
				
			</div>
			<br><br>
		</div>
		<br>
		<div style="display: block; position: absolute; margin-left: 896px;">
			<img src="quotes.jpg" height="750px" width="370px;">
		</div>
	</form>
</body>
</html>

