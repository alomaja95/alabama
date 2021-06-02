<?php require_once("../includes/helpers/initialize.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
					<li class="active"><a href="about.php">About us</a></li>
					<li><a href="listings.php">Properties</a></li>
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
					<li><a href="apply.php">Apply</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">About us</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- Intro Content -->
				<div class="col-lg-6">
					<div class="intro_content">
						<div class="section_title_container">
							<div class="section_subtitle">the best deals</div>
							<div class="section_title"><h1>Who we are</h1></div>
						</div>
						<div class="intro_text">
							<p>Alabama Estate Management LTD was incoorporated to render services to the public with reagrd to sale and aquisition of real estate towit:Construction of bulidings, Sale and purchase of land, houses, lease or let of land and houses, waste management services with certificated estate valuers, surveyor, architech, bulding engineers, accountant, computer analyst to mention but a few.</p>
						</div>
						<div class="button intro_button"><a href="#">read more</a></div>
					</div>
				</div>

				<!-- Intro Image -->
				<div class="col-lg-6 intro_col">
					<div class="intro_image">
						<div class="background_image" style="background-image:url(images/intro.jpg)"></div>
						<img src="images/intro.jpg" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Services</h1></div>
					</div>
				</div>
			</div>
			<div class="row services_row">
				
				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_1.png" alt="">
							</div>
							<div class="service_title"><h3>Construction</h3></div>
						</div>
						<div class="service_text">
							<p>With our able hands, we are ready to assist our prospective landlords in accomplishing their dreams with regard to ownership of homes.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_2.png" alt="">
							</div>
							<div class="service_title"><h3>Real estate sales</h3></div>
						</div>
						<div class="service_text">
							<p>We are capable of facilitating the sale of a property on behalf of our client as we can also represent our customers in acquiring properties through constructive negotiation at a reasonable price.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_3.png" alt="">
							</div>
							<div class="service_title"><h3>Renting</h3></div>
						</div>
						<div class="service_text">
							<p>We serve as intermidairy between a landlord/caretaker and a tenant. In the same vein between a lessor and a lessee </p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_4.png" alt="">
							</div>
							<div class="service_title"><h3>Waste management</h3></div>
						</div>
						<div class="service_text">
							<p>We ensure a healthy enviroment by assisting our client in moving their debris, waste, trash, to a designated abode, with the support and approval by the local government.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_5.png" alt="">
							</div>
							<div class="service_title"><h3>Evaluation</h3></div>
						</div>
						<div class="service_text">
							<p>With our certificated estate valuers, we assist our client in ensuring that their properties are not underpriced or underrated.</p>
						</div>
					</div>
				</div>

				<!-- Service -->
				<div class="col-xl-4 col-md-6">
					<div class="service">
						<div class="service_title_container d-flex flex-row align-items-center justify-content-start">
							<div class="service_icon d-flex flex-column align-items-start justify-content-center">
								<img src="images/service_6.png" alt="">
							</div>
							<div class="service_title"><h3>Price Consulting</h3></div>
						</div>
						<div class="service_text">
							<p>We acquaint ourselves with the current situation in price of properties to safe guard our client from over payment of any sort.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/duplex.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="425">0</div>
							<div class="milestone_text">homes and land</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/prize.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="18">0</div>
							<div class="milestone_text">awards</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/home.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="25" data-sign-after="k">0</div>
							<div class="milestone_text">followers</div>
						</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-xl-3 col-md-6 milestone_col">
					<div class="milestone d-flex flex-row align-items-start justify-content-md-center justify-content-start">
						<div class="milestone_content">
							<div class="milestone_icon d-flex flex-column align-items-start justify-content-center"><img src="images/rent.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="1265">0</div>
							<div class="milestone_text">rentals</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Agents -->

	<div class="agents">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Our Realtors</h1></div>
					</div>
				</div>
			</div>
			<div class="row agents_row">
				
				<!-- Agent -->
				<div class="col-lg-4 agent_col">
					<div class="agent">
						<div class="agent_image"><img src="images/realtor_1.jpg" alt=""></div>
						<div class="agent_content">
							<div class="agent_name"><a href="#">Michael Smith</a></div>
							<div class="agent_title">Bought land</div>
							<div class="agent_list">
								<ul>
									<li>michael@myhometemp.com</li>
									<li>+45 27774 5653 267</li>
								</ul>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Agent -->
				<div class="col-lg-4 agent_col">
					<div class="agent">
						<div class="agent_image"><img src="images/realtor_2.jpg" alt=""></div>
						<div class="agent_content">
							<div class="agent_name"><a href="#">Jane Williams</a></div>
							<div class="agent_title">Buying Agent</div>
							<div class="agent_list">
								<ul>
									<li>michael@myhometemp.com</li>
									<li>+45 27774 5653 267</li>
								</ul>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Agent -->
				<div class="col-lg-4 agent_col">
					<div class="agent">
						<div class="agent_image"><img src="images/realtor_3.jpg" alt=""></div>
						<div class="agent_content">
							<div class="agent_name"><a href="#">Carla Brown</a></div>
							<div class="agent_title">Buying Agent</div>
							<div class="agent_list">
								<ul>
									<li>michael@myhometemp.com</li>
									<li>+45 27774 5653 267</li>
								</ul>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row contact_row">
				<div class="col">
					<div class="button ml-auto mr-auto"><a href="contact.php">contact us</a></div>
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
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/about.js"></script>
</body>
</html>