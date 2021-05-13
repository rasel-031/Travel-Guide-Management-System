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

	<!-- link the user define css -->
	<link rel="stylesheet" href="home.css">
	<link rel="stylesheet" type="text/css" href="view_places.css">

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
					<a class="nav-item nav-link " href="home.php"><b>Home </b></a>
					<a class="nav-item nav-link active" href="#"><b>View Places</b><span class="sr-only">(current)</span></a>
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
								<ul class="dropdown-menu" style=" width: 300px;padding: 5px;">
									<li><h6><?php echo $data['Name']; ?></h6></li>
									<li><?php echo $data['Email']; ?></li>
									<li >

										<button style="background-color: white;border: 2px solid #f44336;"><a href="logout.php" style="text-decoration: none;"><b>Log-out</b></a>
										</button>
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

		<div class="container-fluid main-ctn-1-view-places ctn-transparent">
			<br><br><br><br>
			<h2 align="center" style="color:white;font-family: 'Averia Serif Libre',sans-serif;
			font-size: 50px;font-weight: bold;">View & choose places in Bangladesh</h2>
			
			
		</div>


<!-- second container -->

<div class="container-fluid" style="background-color:whitesmoke;">
			<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
				<div class="row">
					<div class="col-sm-6">

						<!-- Slide show content start-->

						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="places/sundarban/a.jpg" alt="cox-bazar..1" class="slide-img" >
									<div class="carousel-caption d-none d-md-block">
										<h5>Dears at Sundarban</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/sundarban/b.jpg" alt="cox-bazar..2" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Wild Orchid Garden at Kotka, Sundarban</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/sundarban/c.jpg" alt="cox-bazar..3" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Sundarban - Royal Bengal Tigar</h5>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>

						<!-- Slide show content end-->

					</div>

					<div class="col-sm-6">
						<section style="padding: 40px;">
							<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
							<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
								<a>Sundarbans, Khulna</a></h2>
								<p>The Sundarbans is a mangrove area in the delta formed by the confluence of the Ganga, Brahmaputra and Meghna Rivers in the Bay of Bengal. It comprises closed and open mangrove forests, agriculturally used land, mudflats and barren land, and is intersected by multiple tidal streams and channels. Four protected areas in the Sundarbans are enlisted as UNESCO World Heritage Sites, viz Sundarbans National Park, Sundarbans West, Sundarbans South and Sundarbans East Wildlife Sanctuaries.<br><br><b>Area: </b>139,500 ha (539 sq mi)<br><b>Weather: </b>23°C, Wind N at 8 km/h, 85% Humidity
									</p>
								
								<a href="https://www.google.com/maps/place/Sundarban+Forest,+Bangladesh/@22.0113818,89.4188488,42520a,35y,35.52t/data=!3m1!1e3!4m13!1m7!3m6!1s0x3a004caac2c7b315:0x4716abcfbb16c93c!2sSundarbans!3b1!8m2!3d21.9497274!4d89.1833304!3m4!1s0x3a004dc6db4e2a8d:0x439f0905dc1f7392!8m2!3d22.2973556!4d89.5674133"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>
								
							</section>
						</div>
						
					</div>
				</div>
			</div>

			<br>

		

<!-- 3rd container -->

<div class="container-fluid" style="background-color:whitesmoke;">
				<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
					<div class="row">

						<div class="col-sm-6">
							<section style="padding: 40px;">
								<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
								<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
									<a>Kuakata Sea Beach, Patuakhali</a></h2>
									<p>Kuakata is a beach town known for its panoramic sea beach. It is in southeastern Bangladesh and is the number sizeable tourist destination in the country.Kuakata offers a full view of the sunrise and sunset from the same white sandy beach in the water of the Bay of Bengal. Locally known as Shagor Kannya (Daughter of Ocean), the long strip of dark, marbled sand stretches for about 18 kilometres (11 mi). <br><br>
									<b>Area: </b>54 km² <br>
									<b>Weather: </b>24°C, Wind N at 10 km/h, 87% Humidity</p>
									<br>
									<a href="https://www.google.com/maps/place/Kuakata+Sea+Beach/@21.7747382,90.1714225,3118a,35y,38.53t/data=!3m1!1e3!4m5!3m4!1s0x30aa62836f83b573:0x31e7fec84916471!8m2!3d21.8031005!4d90.1822792"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>

								</section>
							</div>

							<div class="col-sm-6">

								<!-- Slide show content start-->

								<div id="demo" class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ul class="carousel-indicators">
										<li data-target="#demo" data-slide-to="0" class="active"></li>
										<li data-target="#demo" data-slide-to="1"></li>
										<li data-target="#demo" data-slide-to="2"></li>
									</ul>

									<!-- The slideshow -->
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="places/kuakata/a.jpg" alt="cox-bazar..1" class="slide-img" >
											<div class="carousel-caption d-none d-md-block">
												<h5>kuakata sunset</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/kuakata/b.jpg" alt="cox-bazar..2" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>Kuakata Coconut Garden</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/kuakata/c.jpg" alt="cox-bazar..3" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>Kuakata Beach</h5>
											</div>
										</div>
									</div>

									<!-- Left and right controls -->
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									</a>

								</div>

								<!-- Slide show content end-->

							</div>

						</div>
					</div>
				</div>

				<br>			

<!-- 4th container -->

		<div class="container-fluid" style="background-color:whitesmoke;">
			<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
				<div class="row">
					<div class="col-sm-6">

						<!-- Slide show content start-->

						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="places/saint-martin/a.jpg" alt="cox-bazar..1" class="slide-img" >
									<div class="carousel-caption d-none d-md-block">
										<h5>East view of Saint Martins Island</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/saint-martin/b.jpg" alt="cox-bazar..2" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>West view of Saint Martins Island</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/saint-martin/c.jpg" alt="cox-bazar..3" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Coconut garden Saint Martins Island</h5>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>

						<!-- Slide show content end-->

					</div>

					<div class="col-sm-6">
						<section style="padding: 40px;">
							<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
							<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
								<a>St. Martin's Island, Chattogram</a></h2>
								<p>St. Martin's Island is a small island in the northeastern part of the Bay of Bengal, about 9 km south of the tip of the Cox's Bazar-Teknaf peninsula, and forming the southernmost part of Bangladesh. There is a small adjoining island that is separated at high tide, called Chera Dwip. <br><br><b>Area: </b>36 km2 (14 sq mi) <br><b>Width: </b>‎6 km (3.7 mi)<br><b>Weather: </b>26°C, Wind N at 4 km/h, 69% Humidity
									</p>
								<br><br>
								<a href="https://www.google.com/maps/place/St.+Martin's+Island/@20.6144892,92.3174419,1619a,35y,38.85t/data=!3m1!1e3!4m5!3m4!1s0x30ae2363dee2d61b:0xfb3463713589d312!8m2!3d20.6237016!4d92.3233948"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>
								
							</section>
						</div>
						
					</div>
				</div>
			</div>

			<br>

<!-- 5th container -->

			<div class="container-fluid" style="background-color:whitesmoke;">
				<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
					<div class="row">

						<div class="col-sm-6">
							<section style="padding: 40px;">
								<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
								<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
									<a>Sajek Valley, Rangamati</a></h2>
									<p>Sajek Valley is an emerging tourist spot in Bangladesh situated among the hills of Kasalong range of mountains in Sajek union, Baghaichhari Upazila in Rangamati District. Sajek valley is known for its natural environment and surrounded by mountains, dense forest, and grasslands hill tracks. Sajek valley is known as the Queen of Hills & Roof of Rangamati. <br><br><br><b>Area: </b>1,476 feet (450 m) above sea level <br><b>Weather: </b>21°C, Wind N at 0 km/h, 79% Humidity</p>
									<br>
									<a href="https://www.google.com/maps/place/Sajek+Valley/@23.4040168,92.2781578,256a,35y,39.27t/data=!3m1!1e3!4m5!3m4!1s0x3752feb9eb8c7313:0xf1d07a0cc84f174c!8m2!3d23.4055511!4d92.2786261"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>

								</section>
							</div>

							<div class="col-sm-6">

								<!-- Slide show content start-->

								<div id="demo" class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ul class="carousel-indicators">
										<li data-target="#demo" data-slide-to="0" class="active"></li>
										<li data-target="#demo" data-slide-to="1"></li>
										<li data-target="#demo" data-slide-to="2"></li>
									</ul>

									<!-- The slideshow -->
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="places/sajek-valley/a.jpg" alt="cox-bazar..1" class="slide-img" >
											<div class="carousel-caption d-none d-md-block">
												<h5>Runmoy resort at Sajek Valley</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/sajek-valley/b.jpg" alt="cox-bazar..2" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>View from Sajek, Rangamati</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/sajek-valley/c.jpg" alt="cox-bazar..3" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>Sajek Valley Main Spot</h5>
											</div>
										</div>
									</div>

									<!-- Left and right controls -->
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									</a>

								</div>

								<!-- Slide show content end-->

							</div>

						</div>
					</div>
				</div>

				<br>

<!-- 6th container -->

<div class="container-fluid" style="background-color:whitesmoke;">
			<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
				<div class="row">
					<div class="col-sm-6">

						<!-- Slide show content start-->

						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="places/cox-bazar/a.jpg" alt="cox-bazar..1" class="slide-img" >
									<div class="carousel-caption d-none d-md-block">
										<h5>Laboni Beach</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/cox-bazar/b.jpg" alt="cox-bazar..2" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Cox's Bazar Beach</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/cox-bazar/c.jpg" alt="cox-bazar..3" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Inani Beach</h5>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>

						<!-- Slide show content end-->

					</div>

					<div class="col-sm-6">
						<section style="padding: 40px;">
							<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
							<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
								<a>Cox's Bazar, Chattogram</a></h2>
								<p>Cox’s Bazar is a town on the southeast coast of Bangladesh. It’s known for its very long, sandy beachfront, stretching from Sea Beach in the north to Kolatoli Beach in the south. <br>South of town, the tropical rainforest of Himchari National Park has waterfalls and many birds. North, sea turtles breed on nearby Sonadia Island. <br><br><b>Area: </b>23.4 km² <br><b>Weather: </b>16°C, Wind N at 3 km/h, 73% Humidity</p>
								<br>
								<a href="https://www.google.com/maps/place/Coxsbazar+Sea+Beach/@21.4094589,91.9791119,1021a,35y,38.87t/data=!3m1!1e3!4m5!3m4!1s0x30adc968ce13997f:0xc0dca75a2dfc4e85!8m2!3d21.4289916!4d91.9700933"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>
								
							</section>
						</div>
						
					</div>
				</div>
			</div>

			<br>

<!-- 7rd container -->

<div class="container-fluid" style="background-color:whitesmoke;">
				<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
					<div class="row">

						<div class="col-sm-6">
							<section style="padding: 40px;">
								<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
								<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
									<a>Jaflong, Sylhet</a></h2>
									<p>Jaflong is a hill station and tourist destination in the Division of Sylhet, Bangladesh. It is located in Gowainghat Upazila of Sylhet District, overshadowed by subtropical mountains and rainforests.jaflong is known for its stone collections and is home of the Khasi tribe. <br>  Jaflong located amidst tea gardens and hills. It is situated besides the river Sari in the lap of Hill Khashia. <br><br><b>Area: </b>3 km <br><b>Weather: </b>18°C, Wind N at 11 km/h, 79% Humidity</p>
									<br>
									<a href="https://www.google.com/maps/place/Jaflong/@25.1558971,91.9978646,1310a,35y,38.99t/data=!3m1!1e3!4m5!3m4!1s0x375044bd7d747f47:0xef2b6cb5bcade375!8m2!3d25.1633829!4d92.0175242"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>

								</section>
							</div>

							<div class="col-sm-6">

								<!-- Slide show content start-->

								<div id="demo" class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ul class="carousel-indicators">
										<li data-target="#demo" data-slide-to="0" class="active"></li>
										<li data-target="#demo" data-slide-to="1"></li>
										<li data-target="#demo" data-slide-to="2"></li>
									</ul>

									<!-- The slideshow -->
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="places/jaflong/a.jpg" alt="cox-bazar..1" class="slide-img" >
											<div class="carousel-caption d-none d-md-block">
												<h5>Jaflong</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/jaflong/b.jpg" alt="cox-bazar..2" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>Piyain River</h5>
											</div>
										</div>
										<div class="carousel-item">
											<img src="places/jaflong/c.jpg" alt="cox-bazar..3" class="slide-img">
											<div class="carousel-caption d-none d-md-block">
												<h5>Collection of rolling stones</h5>
											</div>
										</div>
									</div>

									<!-- Left and right controls -->
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<span class="carousel-control-next-icon"></span>
									</a>

								</div>

								<!-- Slide show content end-->

							</div>

						</div>
					</div>
				</div>

				<br>			

<!-- 8th container -->

		<div class="container-fluid" style="background-color:whitesmoke;">
			<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">
				<div class="row">
					<div class="col-sm-6">

						<!-- Slide show content start-->

						<div id="demo" class="carousel slide" data-ride="carousel">

							<!-- Indicators -->
							<ul class="carousel-indicators">
								<li data-target="#demo" data-slide-to="0" class="active"></li>
								<li data-target="#demo" data-slide-to="1"></li>
								<li data-target="#demo" data-slide-to="2"></li>
							</ul>

							<!-- The slideshow -->
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="places/sreemangal/a.jpg" alt="cox-bazar..1" class="slide-img" >
									<div class="carousel-caption d-none d-md-block">
										<h5>Sreemangal Tea Garden & Rain forest Expedition</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/sreemangal/b.jpg" alt="cox-bazar..2" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Ham Ham Waterfall</h5>
									</div>
								</div>
								<div class="carousel-item">
									<img src="places/sreemangal/c.jpg" alt="cox-bazar..3" class="slide-img">
									<div class="carousel-caption d-none d-md-block">
										<h5>Lawachara National Park</h5>
									</div>
								</div>
							</div>

							<!-- Left and right controls -->
							<a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>

						</div>

						<!-- Slide show content end-->

					</div>

					<div class="col-sm-6">
						<section style="padding: 40px;">
							<p style="padding: 3px;background-color:orange;border: 1px solid white;text-align: center;border-radius: 3px;">MOST POPULAR PLACE!</p>
							<h2 style="font-family: 'Averia Serif Libre',sans-serif;">
								<a>Sreemangal, Sylhet</a></h2>
								<p>Sreemangal is situated in Moulvibazar district in sylhet division. Sreemangal is an Upazila. It is famous for tea garden. Rain all time occurs here. Nature has adorned sreemangal with green tress. Its natural scenery is very charming. It soothes one’s eyes. Birds are twittering always here. The first tea garden in Bangladesh which names “Malni chho ra tea garden” is here.The terraced tea gardens, plantations and evergreen hills of sreemangal are wonderful treats for the tourists.<br><br><b>Area: </b>450.7 km²<br>
								<b>Weather: </b>22°C, Wind E at 0 km/h, 86% Humidity
									</p>
								
								<a href="https://www.google.com/maps/place/Sreemangal/@24.299197,91.7276619,974a,35y,39.07t/data=!3m1!1e3!4m13!1m7!3m6!1s0x37517a7a9ac91745:0x50f827893a88c955!2sSreemangal!3b1!8m2!3d24.3065193!4d91.7295503!3m4!1s0x37517a7a9ac91745:0x50f827893a88c955!8m2!3d24.3065193!4d91.7295503"><button type="button" class="btn btn-success btn-lg ">See on google map</button></a>
								
							</section>
						</div>
						
					</div>
				</div>
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
										<form action="login_places.php" method="POST" class="was-validated" style="margin-top: -20px;font-family: 'Averia Serif Libre',sans-serif;">
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

											<button type="submit" name ="login" class="btn btn-danger" style="width: 100%;">LOGIN
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