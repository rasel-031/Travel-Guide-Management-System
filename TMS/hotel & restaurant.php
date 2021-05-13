

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
	<link rel="stylesheet" type="text/css" href="view_packages.css">
	<link rel="stylesheet" type="text/css" href="hotel & restaurant.css">

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
					<a class="nav-item nav-link" href="view_places.php"><b>View Places</b></a>
					<a class="nav-item nav-link " href="view_packages.php"><b>View Pakages</b></a>
					<a class="nav-item nav-link active" href="#"><b>Hotel & restaurants, Vehicles</b>
						<span class="sr-only">(current)</span></a>

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
				</nav>

				<!-- header end -->

				<!-- main body start -->

				<!-- transparent container -->

				<div class="container-fluid main-ctn-1-view-packages ctn-transparent">
					<br><br><br><br>
					<h2 align="center" style="color:white;font-family: 'Averia Serif Libre',sans-serif;
					font-size: 50px;font-weight: bold;">View & choose our Hotel & Restaurants, Vehicles</h2>


				</div>

				<!-- second container -->
				<div class="container-fluid" style="background-color:white;height: auto;">
					<div class="container-fluid" style="padding-top: 33px;padding-left: 40px;padding-right: 40px;">

						<h2 style="color:black;font-family: 'Averia Serif Libre',sans-serif;
						font-size: 30px;font-weight: bold;">Hotel, Restaurants & Vehicles</h2><br>

						<div id="btnContainer">
							<button class=" butn google " onclick="listView()"><i class="fa fa-bars"></i> List View</button> 
							<button class="butn google" onclick="gridView()"><i class="fa fa-th-large"></i> Grid View
							</button>
						</div>
						<br>
						<div><br><h3 class="google">Hotels</h3><br></div>
						<div class="row">
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										Laguna Beach Hotel
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/a.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">Set in Cox's Bazar, Laguna Beach Hotel & Resort offers 3-star accommodation with a shared lounge, a garden and a terrace. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi throughout the property. Free private parking is available and the hotel also offers car hire for guests who want to explore the surrounding area.</p>
											<span class="hotel_icon">Most popular facilities:</span>
											
											<span class="hotel_icon">
												<img src="hotels/wifi.jpg" class="img_hot"> Free Wi-Fi
											</span>
											<span class="hotel_icon">
												<img src="hotels/parking.png" class="img_hot"> Free parking
											</span>
											<span class="hotel_icon">
												<img src="hotels/room-service.png" class="img_hot">  Room service
											</span>
											<span class="hotel_icon">
												<img src="hotels/food.png" class="img_hot"> Restaurant
											</span>
											<br><br>
											<span class="hotel_icon" >
												<img src="image/taka.png" class="img_hot"> 
												<span style="background-color:hotpink;">BDT 5,525 TK</span>
											</span>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											Check availability</a>
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										Long Beach Hotel
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/b.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">Offering an indoor pool, a fitness centre and a spa and wellness centre, Long Beach Hotel is located 3.3 km from the Cox's Bazar Airport and Local Bus Station. Free wired internet is available in the rooms of the property.Each air-conditioned room here will provide you with a satellite TV, seating area and a balcony. There is also a minibar. Featuring a shower, private bathroom also comes with bathrobes and free toiletries.
											</p>
											<span class="hotel_icon">Most popular facilities:</span>
											
											<span class="hotel_icon">
												<img src="hotels/wifi.jpg" class="img_hot"> Free Wi-Fi
											</span>
											<span class="hotel_icon">
												<img src="hotels/parking.png" class="img_hot"> Free parking
											</span>
											<span class="hotel_icon">
												<img src="hotels/room-service.png" class="img_hot">  Room service
											</span>
											<span class="hotel_icon">
												<img src="hotels/food.png" class="img_hot"> Restaurant
											</span>
											<br><br>
											<span class="hotel_icon" >
												<img src="image/taka.png" class="img_hot"> 
												<span style="background-color:hotpink;">BDT 3,060 TK</span>
											</span>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											Check availability</a>
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										Prime Park Hotel
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/c.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">Set in Cox's Bazar, Prime Park Hotel offers 3 accommodation with private balconies. Among the facilities of this property are a restaurant, a 24-hour front desk and room service, along with free WiFi. The property offers bike hire and features a garden and terrace.The units come with air conditioning, a flat-screen TV with cable channels, a kettle, a shower, free toiletries and a desk.</p>
											<span class="hotel_icon">Most popular facilities:</span>
											
											<span class="hotel_icon">
												<img src="hotels/wifi.jpg" class="img_hot"> Free Wi-Fi
											</span>
											<span class="hotel_icon">
												<img src="hotels/parking.png" class="img_hot"> Free parking
											</span>
											<span class="hotel_icon">
												<img src="hotels/room-service.png" class="img_hot">  Room service
											</span>
											<span class="hotel_icon">
												<img src="hotels/food.png" class="img_hot"> Restaurant
											</span>
											<br><br>
											<span class="hotel_icon" >
												<img src="image/taka.png" class="img_hot"> 
												<span style="background-color:hotpink;">BDT 2,550 TK</span>
											</span>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											Check availability</a>
											
										</div>

									</div>
								</div>
							</div>
							<br>

							<div><br><h3 class="google" style="margin-left: 12px;">Restaurants</h3><br></div>
							<br>
							<div class="secret_div"></div>

							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										EFC-A Live Fish Restaurant
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/a1.png" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">This is one of the best restaurant in Cox's Bazar specially for fish lovers. People can choose live fishes for consumption which are displayed in a large aquarium. Also the internal decoration is nice and clean. Most importantly the taste of the fish items are incredible. So anyone can come here once may repeat for sure.</p>

											<span class="hotel_icon">
												<img src="hotels/adress.png" class="img_hot"> <b>Address:</b> Opposite Hotel Shaibal Motel Road, Hotel Model Zone.
											</span><br>
											<span class="hotel_icon">
												<img src="image/timer.png" class="img_hot"> <b>Hours: </b>Sunday - Monday (9.00am - 10.30pm)
											</span><br>
											<span class="hotel_icon">
												<img src="icon/call.png" class="img_hot"> <b>Phone: </b>01723456736
											</span>
											
											<br><br>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											See on google map</a>
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										Salt Bistro & Cafe
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/b1.png" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">A little piece of Dhaka in Cox’s Bazar. Salt has a wide range of coffees and foods. The food tastes great. The ambience is great and it has ample space to sit and relax. Their service is also good. Moreover, the price is not out of range. Cafes like this is not uncommon in Dhaka but in Cox’s Bazar, it’s very unique.</p>

											<span class="hotel_icon">
												<img src="hotels/adress.png" class="img_hot"> <b>Address:</b>  10, Kalatoli, Hotel-Motel Zone, Cox's Bazar 4700.
											</span><br>
											<span class="hotel_icon">
												<img src="image/timer.png" class="img_hot"> <b>Hours: </b>Sunday - Monday (11.00am - 11.00pm)
											</span><br>
											<span class="hotel_icon">
												<img src="icon/call.png" class="img_hot"> <b>Phone: </b>01723886736
											</span>
											
											<br><br>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											See on google map</a>
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										Mermaid Cafe
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="hotels/c1.png" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">The food was freshly cooked and the way the serve the food was quite unique. Loved the straws which were made of bamboo (probably but not with plastic at least). They have live music at night which was quite enjoyable. The local singers sang the local folk songs which we really liked. Excellent place for candle light dinner.</p>

											<span class="hotel_icon">
												<img src="hotels/adress.png" class="img_hot"> <b>Address:</b> Near Dragon Mart, Kolatoli Road, Sugandha Beach Sea In point.
											</span><br>
											<span class="hotel_icon">
												<img src="image/timer.png" class="img_hot"> <b>Hours: </b>Sunday - Monday (12.00am - 12.00pm)
											</span><br>
											<span class="hotel_icon">
												<img src="icon/call.png" class="img_hot"> <b>Phone: </b>01777456736
											</span>
											
											<br><br>
											&nbsp;&nbsp;&nbsp;
											<a href="#" class="btn btn-success" style="width: 190px;">
											See on google map</a>
											
										</div>

									</div>
								</div>
							</div>

							<br>

							<div><br><h3 class="google" style="margin-left: 12px;">Vehicles</h3><br></div>
							<br>
							<div class="secret_div"></div>

							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										BUS
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="vehicles/bus.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">
												
												<ul>
													<li>21+8 Seater [ Nissan Civilian (Brand New) ]</li>
													<li>Full Air Conditioned (Dual A.C) and Full auto Option, Diesel Engine, 4200cc</li>
													<li> Full fabric seats, Seat belts for all passengers and driver</li>
													<li> Radio with antenna and speaker, CD player</li>
													<li>Standard fittings and lightings,  Power Steering</li>
													<li>Spare wheel, tools bag with jack handle, wheel range & tool kits etc</li>
												</ul>	
												
												
												&nbsp;&nbsp;&nbsp;
												<a href="#" class="btn btn-success" style="width: 190px;">
												Check Availability</a>

											</p>	
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										HIACE (Minibus)
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="vehicles/hiace.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">
												
												<ul>
													<li>12 Seater [ Nissan Civilian (Brand New) ]</li>
													<li>Full Air Conditioned (Dual A.C) and Full auto Option, Diesel Engine, 4200cc</li>
													<li> Full fabric seats, Seat belts for all passengers and driver</li>
													<li> Radio with antenna and speaker, CD player</li>
													<li>Standard fittings and lightings,  Power Steering</li>
													<li>wide-opening doors for easy access and the powerful 3.0-litre turbo diesel engine taking care of the hard work</li>
												</ul>	
												
												
												&nbsp;&nbsp;&nbsp;
												<a href="#" class="btn btn-success" style="width: 190px;">
												Check Availability</a>

											</p>	
											
										</div>

									</div>
								</div>
							</div>
							<br>
							<div class="column" style="background-color:whitesmoke; height: auto;">
								<div class="container-part">
									<h3 style="font-family: 'Averia Serif Libre',sans-serif;">
										PICK-UP
									</h3>
									<div class="hotel_row">
										<div class="hotel_img">
											<img src="vehicles/pick-up.jpg" height="230px" width="355px">
										</div>
										<div class="hotel_discription">
											<p class="hotel_icon">
												
												<ul>
													<li>6 Seater [ TOYOTA (Brand New) ]</li>
													<li>Full Air Conditioned (Dual A.C) and Full auto Option, Diesel Engine, 4200cc</li>
													<li> Full fabric seats, Seat belts for all passengers and driver</li>
													<li> Radio with antenna and speaker, CD player</li>
													<li>Standard fittings and lightings,  Power Steering</li>
													<li>Spare wheel, tools bag with jack handle, wheel range & tool kits etc</li>
												</ul>	
												
												
												&nbsp;&nbsp;&nbsp;
												<a href="#" class="btn btn-success" style="width: 190px;">
												Check Availability</a>

											</p>	
											
										</div>

									</div>
								</div>
							</div>

						</div>

						<script>
                // Get the elements with class="column"
                var elements = document.getElementsByClassName("column");
                var hotel = document.getElementsByClassName("hotel_discription");

                    // Declare a loop variable
                    var i;

                    // List View
                    function listView() 
                    {

                    	for (i = 0; i < elements.length; i++)
                    	{
                    		elements[i].style.width = "100%";
                    		elements[i].style.height = "auto";
                    	}

                    	var container = document.getElementById("btnContainer");
                    	var btns = container.getElementsByClassName("butn");

                    	btns[0].style.background = "#666";
                    	btns[0].style.color = "white";

                    	btns[1].style.background = "";
                    	btns[1].style.color = "";

                    	var j;

                    	for (j = 0; j < hotel.length; j++)
                    	{
                    		hotel[j].style.display = "";
                    		hotel[j].style.width = "836px";
                    	}
                    	



                    }

                    // Grid View
                    function gridView() 
                    {

                    	var container = document.getElementById("btnContainer");
                    	var btns = container.getElementsByClassName("butn");

                    	btns[1].style.background = "#666";
                    	btns[1].style.color = "white";

                    	btns[0].style.background = "";
                    	btns[0].style.color = "";

                    	var j;

                    	for (j = 0; j < hotel.length; j++)
                    	{
                    		hotel[j].style.display = "block";
                    		hotel[j].style.width = "355px";
                    	}
                    	

                    	for (i = 0; i < elements.length; i++)
                    	{
                    		elements[i].style.width = "32%";
                    		elements[i].style.height = "680px";

                    		if (i==2)
                    		{
                    			var grid = document.getElementsByClassName("secret_div");
                    			grid[0].style.display = "block";
                    			grid[1].style.display = "block";
                    			
                    		}
                    	}

                    }


                </script>



            </div>
            <div>

            	<br><br><br><br><br><br>

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
    							<form action="login_hotel.php" method="POST" class="was-validated" style="margin-top: -20px;font-family: 'Averia Serif Libre',sans-serif;">
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