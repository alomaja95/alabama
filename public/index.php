<?php require_once("../includes/Helpers/initialize.php"); ?>
<?php require("header.php"); ?>
<?php
//Activating our pagination system
//1. The current page number($current_page)
$page = !empty($_GET['page']) ? (int)$_GET['page']: 1;


//2. Records per page($per_page)
$per_page = 15;


//3. total record count ($total_count)
$total_count = Photograph::count_all();

//Find all photos
//use pagination instead
//$photos = Photograph::find_all();

$pagination = new Pagination($page, $per_page, $total_count);
//instead of finding all records, just find the record 
//for this page
$sql  = "SELECT * FROM house_details ORDER BY RAND() ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$houses = Photograph::find_by_sql($sql);

//Need to add ?page=$page to all links we want to
//maintain the current page (or store $page in session)

?>
<?php
//Activating our pagination system
//1. The current page number($current_page)
$page = !empty($_GET['page']) ? (int)$_GET['page']: 1;


//2. Records per page($per_page)
$per_page = 3;


//3. total record count ($total_count)
$total_count = Photograph::count_all();

//Find all photos
//use pagination instead
//$photos = Photograph::find_all();

$pagination = new Pagination($page, $per_page, $total_count);
//instead of finding all records, just find the record 
//for this page
$sql  = "SELECT * FROM land_details ORDER BY RAND() ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$lands = land::find_by_sql($sql);

//Need to add ?page=$page to all links we want to
//maintain the current page (or store $page in session)

?>


<?php if(isset($_GET['msg'])) { ?>
	
	<script>
	alert("<?php echo $_GET['msg']; ?>");
	</script>
<?php } ?>
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
					<li><a href="reg.php">for accommondation</li>
					<li><a href="apply.php">Property registration</a></li>

				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container"><br><br><br>
			 <div class="owl-carousel owl-theme home_slider">
			 	
			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>ALABAMA</h1></div>
			 							<div class="home_price_tag">km. 2,okitipupa/igbokoda road, ayeka Ondo state</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>ALABAMA </h1></div>
			 							<div class="home_price_tag">km. 2,okitipupa/igbokoda road, ayeka Ondo state</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 	<!-- Slide -->
			 	<div class="slide">
			 		<div class="background_image" style="background-image:url(images/index.jpg)"></div>
			 		<div class="home_container">
			 			<div class="container">
			 				<div class="row">
			 					<div class="col">
			 						<div class="home_content">
			 							<div class="home_title"><h1>ALABAMA</h1></div>
			 							<div class="home_price_tag">km. 2,okitipupa/igbokoda road, ayeka Ondo state</div>
			 						</div>
			 					</div>
			 				</div>
			 			</div>
			 		</div>
			 	</div>

			 </div>

			 <!-- Home Slider Navigation -->
			 <div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
			 
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_container">
						<div class="search_title">Property type</div>
						<div class="search_form_container">
						<button class="btn btn-success" id="land">land</button>
							<button class="btn btn-success" id="house">housing</button>
							<form action="sort.php" class="search_form" method="POST">
							

							<div id="lan" style="">
								<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="form-input">
								<select class="tag tag_house" name="type" required >
									<option value="land" id="land"> Land </option>
								</select>
								<label style="font-family: sans-serif; font-size:20px;">Location : </label>
									<select class="tag tag_price" name="location" required id="area">
											<option value="">&nbsp;</option>
									<option value="okitipupa"> OKITITPUPA </option>
									<option value="ayeka"> AYEKA </option>
									<option value="igodan">IGODAN</option>
									<option value="Okunmo">OKUNMO</option>
									<option value="igbodigo">IGBODIGO</option>
									<option value="ore">ORE</option>
									<option value="irele">IRELE</option>
									<option value="igbokoda">IGBOKODA</option>
									<option value="nddc">NDDC</option>
										</select>
									</div>
												
												</div>
										<button type="submit" class="search_button" name="area">Check for Vacancy</button>
									</div>
							</div>
							</form>


							<script >
								
  $(document).ready(function(){
         $("#house").click(function(){
         	$("#lan").fadeOut(100);
         	$("#haz").fadeIn(100);
         })    
         $("#land").click(function(){
         	$("#lan").fadeIn(100);
         	$("#haz").fadeOut(100);

         })       
     });
							</script>
							<form action="house_sort.php" class="search_form" method="POST">

						<div id="haz" style="display: none">
									<div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
									<div class="search_inputs d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
								<select class="tag tag_house" name="type" required>
									<option value="house" id="house"> House </option>
								</select>
								<select class="tag tag_house" name="type" required>
									<option value="room"> Single Room </option>
									<option value="self_contained">Self Contain</option>
									<option value="2_bedroom_flat"> 2 Bedroom Flat </option>
									<option value="3_bedroom_flat">3 Bedroom Flat</option>
								</select>
								<label style="font-family: sans-serif; font-size:20px;" >Location : </label>
								<select class="tag tag_price" name="location" required>
									<option value="">&nbsp;</option>
									<option value="okitipupa"> OKITITPUPA </option>
									<option value="ayeka"> AYEKA </option>
									<option value="igodan">IGODAN</option>
									<option value="Okunmo">OKUNMO</option>
									<option value="igbodigo">IGBODIGO</option>
									<option value="ore">ORE</option>
									<option value="irele">IRELE</option>
									<option value="igbokoda">IGBOKODA</option>
									<option value="nddc">NDDC</option>
								</select>

								</div>
								<button  type="submit" name="address" class="search_button" >Check for Vacancy</button>
								</div>
						</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Featured -->

	<div class="featured">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Featured Properties</h1></div>
					</div>
				</div>
			</div>
			<div class="row featured_row">

				
				<?php foreach ($houses as $house): ?>
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="<?php echo $house->outside; ?>" style="height: 400px;" alt="" >
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.php">house</a></div>
								<div class="tag tag_sale"><a href="listings.php">for rent</a></div>
							</div>
							<div class="tag_price listing_price">&#8358; <?php echo $house->price; ?></div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="single.php?id=<?php echo $house->id; ?>"><?php echo $house->address; ?></a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="images/icon_2.png" alt="">
										<span>12ft by 12 ft </span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

				<?php foreach ($lands as $land): ?>
				<!-- Featured Item -->
				<div class="col-lg-4">
					<div class="listing">
						<div class="listing_image">
							<div class="listing_image_container">
								<img src="<?php echo $land->outside; ?>"  style="height: 300px;" alt="">
							</div>
							<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag tag_house"><a href="listings.php">land</a></div>
								<div class="tag tag_sale"><a href="listings.php">for sale</a></div>
							</div>
							<div class="tag_price listing_price">&#8358; <?php echo $land->price; ?></div>
						</div>
						<div class="listing_content">
							<div class="prop_location listing_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<a href="land_single.php?id=<?php echo $land->id; ?>"><?php echo $land->address; ?></a>
							</div>
							<div class="listing_info">
								<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
									<li class="property_area d-flex flex-row align-items-center justify-content-start">
										<img src="images/icon_2.png" alt="">
										<span><?php echo $land->size; ?></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>

	<!-- Map Section -->

	<div class="map_section container_reset">
		<div class="container">
			<div class="row row-xl-eq-height">

				<!-- Map -->
				<div class="col-xl-7 order-xl-1 order-2">
					<div class="map">
						<div id="google_map" class="google_map">
							<div class="map_container">
								<div id="map"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content -->
				<div class="col-xl-5 order-xl-2 order-1">
					<div class="map_section_content">
						<div class="map_overlay">
							<svg fill="#55407d" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
								<path d="M100,0 a-200,150 0 0 0 -100,100 h100 v-100 z" />
							</svg>
						</div>
						<div class="section_title_container">
							<div class="section_subtitle">alabama property hub</div>
							<div class="section_title"><h1>Location we cover</h1></div>
						</div>
						<div class="locations_list d-flex flex-column align-items-start justify-content-start">
							<label class="location_contaner" data-lat="25.794923" data-lng="-80.133661"> 
								<input type="radio" name="location_radio">
								<span></span>
								Okitipupa/Ayeka
							</label>
							<label class="location_contaner" data-lat="41.872883" data-lng="-87.660943">
								<input type="radio" name="location_radio">
								<span></span>
								Irele/Igbotu
							</label>
							<label class="location_contaner" data-lat="40.779528" data-lng="-73.960561">
								<input type="radio" name="location_radio" checked>
								<span></span>
								Igodan/Okunmo
							</label>
							<label class="location_contaner" data-lat="38.910263" data-lng="-77.020496">
								<input type="radio" name="location_radio">
								<span></span>
								Igbokoda
							</label>
							<label class="location_contaner" data-lat="39.296713" data-lng="-76.634918">
								<input type="radio" name="location_radio">
								<span></span>
								Ode Aye
							</label>
							<label class="location_contaner" data-lat="37.806964" data-lng="-122.411291">
								<input type="radio" name="location_radio">
								<span></span>
								Ode Erinje
							</label>
							<label class="location_contaner" data-lat="33.627738" data-lng="-117.909449">
								<input type="radio" name="location_radio">
								<span></span>
								Ore
							</label>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Hot -->

	<div class="hot">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals</div>
						<div class="section_title"><h1>Today's Hot Deal</h1></div>
					</div>
				</div>
			</div>
			<div class="row hot_row row-eq-height">
				
				<!-- Hot Deal Image -->
				<div class="col-lg-6">
					<div class="hot_image">
						<div class="background_image" style="background-image:url(images/hot.jpg)"></div>
						<div class="tags d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="tag tag_house"><a href="listings.php">house</a></div>
							<div class="tag tag_sale"><a href="listings.php">for sale</a></div>
						</div>
					</div>
				</div>

				<!-- Hot Deal Content -->
				<div class="col-lg-6">
					<div class="hot_content">
						<div class="hot_deal">
							<div class="tag_price">&#8358; 2,000, 000</div>
							<div class="hot_title"><a href="#">Villa for sale</a></div>
							<div class="prop_location d-flex flex-row align-items-start justify-content-start">
								<img src="images/icon_1.png" alt="">
								<span>NDDC, Ayeka Okitipupa Ondo state</span>
							</div>
							<div class="prop_text">
								<p>call our agent on: 09066619111 
								we are at km. 2 okitipupa/igbokoda road, ayeka, Ondo State.
								you can also mail us on: alabamahub600@gmail.com.</p>
							</div>
							<div class="prop_agent d-flex flex-row align-items-center justify-content-start">
								<div class="prop_agent_image"><img src="images/agent_1.jpg" alt=""></div>
								<div class="prop_agent_name"><a href="#">Alomaja Opemipo,</a> Agent</div>
							</div>
						</div>
						<div class="prop_info">
							<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_2_large.png" alt="">
									<div>
										<div>2451</div>
										<div>sq ft</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_3_large.png" alt="">
									<div>
										<div>2</div>
										<div>baths</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_4_large.png" alt="">
									<div>
										<div>2</div>
										<div>beds</div>
									</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<img src="images/icon_5_large.png" alt="">
									<div>
										<div>2</div>
										<div>garages</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	</div>

<?php require("footer.php"); ?>
</div>


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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/custom.js"></script>
</body>
</html>