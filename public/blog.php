<?php require_once("../includes/helpers/initialize.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
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
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Properties</a></li>
					<li class="active"><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="monitor.php">Monitor</a></li>
				</ul>
			</nav>
			
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
			</div>
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="listings.php">Properties</a></li>
					<li><a href="blog.php">News</a></li>
					<li><a href="contact.php">Contact</a></li>
					<li><a href="monitor.php">Monitor</a></li>
					<li><a href="reg.php">For accommondation</li>
					<li><a href="apply.php">Property registration</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Blog</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Blog Posts -->
				<div class="col-lg-9">
					<div class="blog_posts">

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_1.jpg" alt="">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div>07</div>
									<div>nov'18</div>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">How to get a good deal on your house</a></div>
								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>by <a href="#">Admin</a></li>
										<li>in <a href="#">Real Estate</a></li>
										<li>
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">tips and tricks</a></li>
												<li><a href="#">houses</a></li>
												<li><a href="#">marketing</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec malesuada. Donec non ligula non risus luctus mattis non non diam.</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_2.jpg" alt="">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div>07</div>
									<div>nov'19</div>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">How to choose a good area</a></div>
								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>by <a href="#">Admin</a></li>
										<li>in <a href="#">Real Estate</a></li>
										<li>
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">tips and tricks</a></li>
												<li><a href="#">houses</a></li>
												<li><a href="#">marketing</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec malesuada. Donec non ligula non risus luctus mattis non non diam.</p>
								</div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<img src="images/blog_3.jpg" alt="">
								<div class="blog_post_date d-flex flex-column align-items-center justify-content-center">
									<div>07</div>
									<div>nov'19</div>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><a href="#">Paper work needed for a quick buy</a></div>
								<div class="blog_post_info">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li>by <a href="#">Admin</a></li>
										<li>in <a href="#">Real Estate</a></li>
										<li>
											<ul class="d-flex flex-row align-items-start justify-content-start">
												<li><a href="#">tips and tricks</a></li>
												<li><a href="#">houses</a></li>
												<li><a href="#">marketing</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="blog_post_text">
									<p>Nulla aliquet bibendum sem, non placerat risus venenatis at. Prae sent vulputate bibendum dictum. Cras at vehicula urna. Suspendisse fringilla lobortis justo, ut tempor leo cursus in. Nullam fermentum egestas quam nec malesuada. Donec non ligula non risus luctus mattis non non diam.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="page_nav">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						
						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" class="sidebar_search_form">
								<input type="text" class="sidebar_search_input" required="required">
								<button class="sidebar_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title"><h3>Categories</h3></div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">Real Estate</a></li>
									<li><a href="#">Legal Aid</a></li>
									<li><a href="#">Lifestyle & Living</a></li>
									<li><a href="#">Uncategorized</a></li>
								</ul>
							</div>
						</div>

						<!-- Archive -->
						<div class="archive">
							<div class="sidebar_title"><h3>Archive</h3></div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">October 2019</a></li>
									<li><a href="#">September 2019</a></li>
									<li><a href="#">August 2019</a></li>
									<li><a href="#">July 2019</a></li>
									<li><a href="#">June 2019</a></li>
								</ul>
							</div>
						</div>

						<!-- Tags -->
						<div class="sidebar_tags">
							<div class="sidebar_title"><h3>Tags</h3></div>
							<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
								<li><a href="#">tips & tricks</a></li>
								<li><a href="#">real estate</a></li>
								<li><a href="#">house</a></li>
								<li><a href="#">home</a></li>
								<li><a href="#">guest</a></li>
								<li><a href="#">property</a></li>
								<li><a href="#">car</a></li>
								<li><a href="#">buy & sell</a></li>
							</ul>
						</div>

						<!-- Extra -->
						<div class="extra d-flex flex-column align-items-start justify-content-start">
							<div class="background_image" style="background-image:url(images/extra.jpg)"></div>
							<div class="extra_button"><a href="listings.php">Need a Property?</a></div>
							<div class="extra_phone_container mt-auto">
								<div>Alabama help-desk</div>
								<div>+2349066619111</div>
							</div>
						</div>

						<!-- Listing -->
						<div class="sidebar_listing">
							<div class="listing_small">
								<div class="listing_small_image">
									<div>
										<img src="images/listing_6.jpg" alt="">
									</div>
									<div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div class="listing_small_tag tag_house"><a href="listings.php">house</a></div>
										<div class="listing_small_tag tag_sale"><a href="listings.php">for sale</a></div>
									</div>
									<div class="listing_small_price">&#8358; 2,562,346</div>
								</div>
								<div class="listing_small_content">
									<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
										<img src="images/icon_1.png" alt="">
										<a href="single.php">km 4 Igbotu road, Ode Irele</a>
									</div>
									<div class="listing_small_info">
										<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_3.png" alt="">
												<span>2</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_4.png" alt="">
												<span>5</span>
											</li>
											<li class="d-flex flex-row align-items-center justify-content-start">
												<img src="images/icon_5.png" alt="">
												<span>2</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
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
<script src="js/blog.js"></script>
</body>
</html>