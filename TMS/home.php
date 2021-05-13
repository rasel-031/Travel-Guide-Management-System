
<?php 
   
   session_start();
 ?>

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
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<script src="https://kit.fontawesome.com/yourcode.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- offline bootstarp -->

	<link rel="stylesheet" href="file:///F:/CSE%20Related%20Software/Bootstrap/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="file:///F:/CSE%20Related%20Software/Bootstrap/bootstrap-4.4.1-dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="home.css">

	<!-- login script & CSS -->
	<link rel="stylesheet" type="text/css" href="home_login.css">


	<title>Trip-mania</title>

</head>

<body id="bdy">

	<!-- start of division -->
	<div>
		<!-- header start -->
		<!-- navigation bar -->
		<nav class="navbar navbar-toggleable-sm navbar-light bg-light transparent " style="padding: 15px;">

			<!-- navigation toggle button -->
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- search with button -->
			<form class="form-inline my-1 my-lg-0 search" action=" ">
				<input class="form-control mr-sm-1 " type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-1 my-sm-0" type="submit">Search</button>
			</form>


			<!-- Trip-mania image -->
			<a class="navbar-brand" class="rounded" href="#"><img src="image/moto.png" alt="" height="45px" width="200px;"></a>

			<!-- drop-down division with content -->
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#"><b>Home </b><span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="view_places.php"><b>View Places</b></a>
					<a class="nav-item nav-link" href="view_packages.php"><b>View Pakages</b></a>
					<a class="nav-item nav-link" href="hotel & restaurant.php"><b>Hotel & Restaurants, Vehicles</b></a>
					<br>

<!-- inline php code start-->

					<?php 

					if(isset($_SESSION['id'])){
						$conn = mysqli_connect("localhost","root","","tms"); 
						$get_id = $_SESSION['id'];
						$sql = "SELECT Id,Name, Email, Password FROM register WHERE Id = '$get_id' ";
						$result = mysqli_query($conn, $sql);
						$data = mysqli_fetch_assoc($result);
						?>

						<div class="dropdown">
							<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown"><img src="login_img/user.png" height="30px" width="30px" >
								<span class="caret"></span></button>
								<ul class="dropdown-menu" role="menu" style=" width: 300px;padding: 5px;">
									<li><h6><?php echo $data['Name']; ?></h6></li>
									<li><?php echo $data['Email']; ?></li>
									<li >

										<button style="background-color: white;border: 2px solid #f44336;"><a href="logout.php" style="text-decoration: none;"><b>Log-out</b></a></button>
									</li>
									</ul>
								</div>

						<?php }else{ echo "<script>alert('Session['id'] not generated.)</script>";?>

							<a > <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Log in or Sign up</button></a>
						<?php } ?>

<!-- inline php code end -->

					</div>
				</div>
			</nav>

			<!-- header end -->

			<!-- main body start -->
			<!-- transparent container -->

			<div class="container-fluid main-ctn-1 ctn-transparent">

				<br><br>
				<img class="front-moto-img" src="image/resize.png" alt="" height="150px" width="250px;">
				<br><br>

				<h1 class="trip-mania-heading">Geo-Fun</h1>
				<h2 align="center" style="color:white;font-family: 'Averia Serif Libre',sans-serif;
				font-size: 40px;font-weight: bold;">Tour guides in Bangladesh</h2><br><br>


				<a href="view_places.html"><button type="button" class="btn btn-warning btn-lg " style="margin-left: 42.5%;">CHOOSE MY TOUR</button></a>

			</div>


			<!-- second container -->

			<div class="container-fluid" style="background-color:whitesmoke;">
				<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
					<div class="row">
						<div class="col-sm-6">
							<img class="ctn-2-img" src="image/cox-bazar.jpg">
						</div>
						<div class="col-sm-6">
							<section style="padding: 40px;">
								<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR TOUR!</p>
								<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
									<a>Cox's Bazar Tour</a></h2>
									<p>Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. <br>South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island. <br><b>Area: </b>23.4 km² <br><b>Weather: </b>16°C, Wind N at 3 km/h, 73% Humidity</p>

									<a href=""><button type="button" class="btn btn-success btn-lg ">BOOK MY TOUR</button></a>
									<a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FROM <b>BDT 12,500 TK</b></a>
									<br><br>
									<p style="border:1px solid white; background-color: white;width:160px;"><img src="image/timer.png" height="25px" width="25px">
									3 DAYS 2 NIGHTS</p>

								</section>
							</div>

						</div>
					</div>
				</div>

				<!-- third container -->

				<div class="container-fluid" style="background-color:whitesmoke;">
					<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
						<div class="row">

							<div class="col-sm-6">
								<section style="padding: 40px;">
									<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR TOUR!</p>
									<h2 style="font-family: 'Averia Serif Libre',sans-serif;"><a>Jaflong Tour</a></h2>
									<p>Jaflong is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District, overshadowed by subtropical mountains and rainforests.jaflong is known for its stone collections and is home of the Khasi tribe. <br>  Jaflong located amidst tea gardens and hills. It is situated besides the river Sari in the lap of Hill Khashia. <br><b>Area: </b>3 km <br><b>Weather: </b>18°C, Wind N at 11 km/h, 79% Humidity</p>

									<a href=""><button type="button" class="btn btn-success btn-lg ">BOOK MY TOUR</button></a>
									<a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FROM <b>BDT 13,500 TK</b></a>
									<br><br>
									<p style="border:1px solid white; background-color: white;width:160px;"><img src="image/timer.png" height="25px" width="25px">
									3 DAYS 2 NIGHTS</p>

								</section>
							</div>

							<div class="col-sm-6">
								<img class="ctn-2-img" src="image/jaflong.jpg">
							</div>

						</div>
					</div>
				</div>

				<!-- 4th container -->

				<div class="container-fluid" style="background-color: white;">

					<br><br><br>
					<h2 style="font-family: 'Averia Serif Libre',sans-serif;text-align: center;">
						<a>Choose a Tour Category</a></h2><br><br>

						<!-- card-1 -->
						<div class="card card-container-1">
							<img class="card-img-top" src="card-img/jeep.webp" alt="Card image" style="height: 300px; width: 358px;">

							<div class="card-body">
								<h4 class="card-title" style="font-family: 'Averia Serif Libre',sans-serif;">Jeep</h4>
								<p class="card-text">Go on a jeep to explore all sightseeing places in Bangladesh with us. See our full-day jeep tours.</p>
								<a href="#" class="btn btn-outline-success" style="width: 318px;">LEARN MORE</a>
							</div>

						</div>

						<!-- card-2 -->
						<div class="card card-container-2">
							<img class="card-img-top" src="card-img/walk.jpg" alt="Card image" style="height: 300px; width: 358px;">

							<div class="card-body">
								<h4 class="card-title" style="font-family: 'Averia Serif Libre',sans-serif;">Walking</h4>
								<p class="card-text">Take one of our walking tours and explore all beautiful places in Bangladesh with one of our experienced guides. Take a walking tour.</p>
								<a href="#" class="btn btn-outline-success" style="width: 318px;">LEARN MORE</a>
							</div>

						</div>

						<!-- card-3 -->
						<div class="card card-container-2">
							<img class="card-img-top" src="card-img/sightseeing.jpg" alt="Card image" style="height: 300px; width: 358px;">

							<div class="card-body">
								<h4 class="card-title" style="font-family: 'Averia Serif Libre',sans-serif;">
								Sightseeing</h4>
								<p class="card-text">The most breathtaking sightseeings of Bangladesh. Join us to see all the beauty of hills, waterfalls etc.</p>
								<a href="#" class="btn btn-outline-success" style="width: 318px;">LEARN MORE</a>
							</div>

						</div>
						<br><br><br><br><br><br>

					</div>

					<!-- footer -->

					<div class="container-fluid" style="background-color:#1d7745; opacity: 0.9;">

						<div class="container" style="font-family: 'Averia Serif Libre',sans-serif;
						color: white;">
						<div class="row">
							<div class="col-sm-4">

								<section style="margin-top: 55px;">
									<h3>Trip-Mania</h3><br>
									<img src="icon/call.png" width="30px" height="30px">
									<a href="#" style="color: white;"> +8801712345678</a>
									<br><br>
									<img src="icon/mail.png" width="30px" height="30px">
									<a href="#" style="color: white;"> info@trip-mania.com</a>
									<br><br>
									<img src="icon/location.png" width="30px" height="30px">
									<a href="#" style="color: white;"> Talaimari, Boalia Thana, Rajshahi</a>
									<br><br><br>
									<p>Follow us: </p>
									<a href="#" style="text-decoration: none;"><img src="icon/facebook.png" width="35px" height="35px"></a>
									<a href="#" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="icon/tripadvisor.png" width="35px" height="35px"></a>

								</section>

							</div>
							<div class="col-sm-4">

								<img style="margin-top:34%;margin-left:15%;"  src="image/resize.png" alt="" height="150px" width="250px;">

							</div>
							<div class="col-sm-4">

								<section style="margin-top: 55px;margin-left: 100px;">
									<h3>Sitemap</h3>
									<br>
									<a href="#home" style="color: white;"><b>Home</b></a><br>
									<a href="#" style="color: white;"><b>View Places</b></a><br>
									<a href="#" style="color: white;"><b>View Pakages</b></a><br>
									<a href="#" style="color: white;"><b>Hotel & Restaurants, Vehicles</b></a><br>


								</section>

							</div>

						</div>
					</div>
					<br><br>
				</div>

				<!-- extra -->

				<div style="background-color:rgb(30,30,30); height: 83px; width: auto;font-family: 'Averia Serif Libre',sans-serif;color: white;opacity: 0.9;">
					<p style="padding-top: 10px; text-align: center;">

						Powered by ENIGMA
					</p>
					<a href="#" style="color: white;padding-left:40%;">Terms & Conditions</a>
					<a href="#" style="color: white;padding-left:2%;"> Privacy Policy</a>
				</div>

<!-- login form popup start -->

				<!-- The Modal -->
				<div class="modal fade" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content" style="width:375px; margin-left: 60px;">

							<!-- Modal Header -->
							<div class="modal-header" style="background-color: lightseagreen">
								<h5 class="modal-title" style="color: white;font-family: 'Averia Serif Libre',sans-serif;">Log-in with</h5>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<!-- Modal body login-->
							<div class="modal-body">
								<!-- login box start-->
								<div class="box">
									<div class="content">
										<div class="social">
											<a class="circle twitter" href="#">
												<i class="fa fa-twitter" style="font-size:20px;color:white;"></i>
											</a>
											<a  class="circle google" href="#">
												<i class="fa fa-google-plus" style="font-size:20px"></i>
												
											</a>
											<a  class="circle facebook" href="#">
												<i class="fa fa-facebook" style="font-size:20px;color:white;"></i>
											</a>
										</div>
										<br>
										<div class="division">
											<div class="line l"></div>
											<span style="font-family: 'Averia Serif Libre',sans-serif;">or</span>
											<div class="line r"></div>
										</div>

										<!-- form style start-->
										<div>
											<form action="login_home.php" method="POST" class="was-validated" style="margin-top: -20px;font-family: 'Averia Serif Libre',sans-serif;">
												<div class="form-group">
													<label for="uname">Email:</label>
													<input type="text" class="form-control" id="uname" placeholder="Enter email" name="email" required>
													<div class="valid-feedback">Okay.</div>
													<div class="invalid-feedback">Please fill out this field.</div>
												</div>
												<div class="form-group">
													<label for="pwd">Password:</label>
													<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
													<div class="valid-feedback">Okay.</div>
													<div class="invalid-feedback">Please fill out this field.</div>
												</div>

												<label>
													<input type="checkbox" checked="checked" name="remember"> Remember me
												</label><br>

												<button type="submit" name="login" class="btn btn-danger" style="width: 100%;">LOGIN
												</button>

											</form>
										</div>
										<!-- form style end-->
									</div>
									<!-- login box start-->

								</div>
							</div>

							<!-- Modal footer -->
							<div style="background-color: lightseagreen; height: 50px;">

								<div style="margin-top: 12px; margin-left: 13px;">
									<form action="" method="POST">
										<span style="color: white;font-family: 'Averia Serif Libre',sans-serif; float: left;"> &nbsp;Forgot  
											<a href="#" style="color: white;text-decoration: none;">
											password?</a>

										</span>
									</form>

									<form>
										<a href="registration.php" style="color: white;text-decoration: none; float: right;font-family: 'Averia Serif Libre',sans-serif;margin-right: 20px;"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Register</button></a>
									</form>


								</div>

							</div>


						</div>
					</div>

<!-- login form popup end -->


					<!-- end of division -->
				</div> 








			</body>
			</html>