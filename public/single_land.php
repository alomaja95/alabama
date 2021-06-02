<?php require_once("../includes/helpers/initialize.php"); ?>
<?php
//makes sure we get an id
if(empty($_GET['id'])){
    $_POST['msg'] = "No item selected yet";
    $message = $_POST['msg'];
    //redirect_to('ward_list');
}

//find the photo with the provided id
$lands = land::find_by_id($_GET['id']);
if(!$lands){
    $_POST['msg'] = "the item could not be located";
    $message = $_POST['msg'];
    //redirect_to('index.php');
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Listing</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/single.css">
<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">

<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/phone-call.svg" alt=""></div>
						<span>+2349066619111</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/placeholder.svg" alt=""></div>
						<span>km. 2 okitipupa/igbokoda road, ayeka, Ondo State.</span>
					</li>
					<!-- Email -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/envelope.svg" alt=""></div>
						<span>alabamahub600@gmail.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<?php     
				$login_control = new LoginControl();
				$session = new Session();
				 if($session->is_logged_in()){ ?>

				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login/supdate.php?id=<?php echo $session->user_id;  ?>">Update Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<?php }else{ ?>
					<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login.php">Login</a></li>
						<li><a href="reg.php">Accomodation</a></li>
						
					</ul>
				</div>
				<?php } ?>
			</div>
		</div>

		<!-- Header Content -->
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">AlabamaEstate<span>LTD</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li class="active"><a href="listings.php">Properties</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="monitor.php">Monitor</a></li>
				</ul>
			</nav>
			
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
		
			<?php     
				$login_control = new LoginControl();
				//$session = new Session();
				 if($session->is_logged_in()){ ?>

				<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="supdate.php">Update Profile</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<?php }else{ ?>
					<div class="log_reg d-flex flex-row align-items-center justify-content-start">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li><a href="login.php">Login</a></li>
						<li><a href="reg.php">Accomodation</a></li>
						
					</ul>
				</div>
				<?php } ?>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Properties</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="monitor.php">Monitor</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/listings.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Listings</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_container">
						<div class="search_form_container">
							<form action="#" class="search_form" id="search_form">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<input type="text" class="search_input" placeholder="Property type" required="required">
										<input type="text" class="search_input" placeholder="No rooms" required="required">
										<input type="text" class="search_input" placeholder="Location" required="required">
									</div>
									<button class="search_button">submit listing</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Listing -->

	<div class="listing_container">
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- Image -->
	<div class="home1">
		
		<!-- Home Slider -->
		<div class="home1_slider_container">

			 <div class="owl-carousel owl-theme home_slider">
			 	
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image"><img src="<?php echo $lands->outside; ?>"></div>

			 	</div>

			 	

			 </div>

			 <!-- Home Slider Navigation -->
			

			 
		</div>
	</div>

					<!-- Tabs -->
					<div class="listing_tabs d-flex flex-row align-items-start justify-content-between flex-wrap">

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_1" name="listing_tabs" checked>
							<label for="tab_1"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/house.svg" class="svg" alt=""></div>
								<span>open house</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_2" name="listing_tabs">
							<label for="tab_2"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/houses.svg" class="svg" alt=""></div>
								<span>features</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_3" name="listing_tabs">
							<label for="tab_3"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/house2.svg" class="svg" alt=""></div>
								<span>photos</span>
							</div>
						</div>

						<!-- Tab -->


						<!-- Tab -->


						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_6" name="listing_tabs">
							<label for="tab_6"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/location.svg" class="svg" alt=""></div>
								<span>location</span>
							</div>
						</div>

						<!-- Tab -->
						<div class="tab">
							<input type="radio" id="tab_7" name="listing_tabs">
							<label for="tab_7"></label>
							<div class="tab_content d-flex flex-xl-row flex-column align-items-center justify-content-center">
								<div class="tab_icon"><img src="images/contract.svg" class="svg" alt=""></div>
								<span>contact</span>
							</div>
						</div>

					</div>

					<!-- About -->
					<div class="about">
						<div class="row">
							<div class="col-lg-6">
								<div class="property_info">
									<div class="tag_price listing_price">&#8358; <?php echo $lands->price; ?></div>
									<div class="listing_name"><h1>Villa for rent</h1></div>
									<div class="listing_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<span><?php echo $lands->address; ?></span>
									</div>
									<div class="listing_list">
										<ul>
											<li>Property ID: <?php echo $lands->land_id; ?></li>
											<li>Posted on: September 22, 2018</li>
										</ul>
									</div>
									<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
										<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
										<div class="prop_agent_name"><a href="#">classic,</a> Agent</div>
									</div>
									<div class="prop_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="d-flex flex-row align-items-center justify-content-start">
												
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about_text">
									<p>All hosues on ALABAMA website have been scrutinize and inspected .</p>
								</div>
							</div>

						</div>
											<div class="load_more">
						<div class="button ml-auto mr-auto"><a href="reg.php">apply</a></div>



					</div>		
					</div>
				</div>
			</div>
		</div>
	</div>




	<!-- Footer -->
<?php require("footer.php"); ?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single.js"></script>



<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="js/custom.js"></script>
</body>
</html>