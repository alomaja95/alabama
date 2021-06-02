
<?php require("header1.php"); ?>
<?php require_once("../includes/Helpers/initialize.php"); ?>

<?php 
//initializing the user class for registration
$new_user = new User2Control();
// object of the class user that control error message
$message = $new_user->message

?>

<?php if(!empty($message)) { ?>
	
	<script>
	alert("<?php echo $message; ?>");
	</script>
<?php } ?>


<body>
	<!--background-->
	<!-- Contact form -->
	<h1>Register</h1>
	<div class="contact-main-w3-agile">
		<div class="top-section-wthree">
			<h2 class="sub-title">STUDENTS RESIDENCE FORM</h2>
			<p>We are here to make you secure.</p>
		</div>
		<div class="form-agileits-w3layouts">
			<form action="fresher.php" method="POST" enctype="multipart/form-data">

				<div class="form-w3layouts-fields">
					<input type="text" name="name" placeholder="Full name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="har" placeholder="Name and address of hostel/lodge" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<p style="text-align: left; color: black;" >Students' faculty : </p>
					<select name="faculty" 
					style="
						width: 100%;
	padding: 12px 15px;
	border: none;
	outline: none;
	color: #000;
	font-size: 14px;
	font-weight: 500;
	letter-spacing: 0.5px;
	margin-bottom: 15px;
	box-sizing: border-box;
	background: rgba(150, 150, 150, 0.34);
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	-moz-transition: 0.5s all;
	font-family: 'Montserrat', sans-serif;
	box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-webkit-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.24);
	-ms-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-o-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-moz-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
					"
					>
					<option value="science">SCIENCE</option>
					<option value="agric">AGRICULTURE</option>
					<option value="enginerring">ENGINEERING</option>
					</select>
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="dept" placeholder="Department" required="" />
				</div>
				<div class="form-w3layouts-fields">
				<p style="text-align: left; color: black;" >level  </p>
					<select name="level" 
					style="
						width: 100%;
	padding: 12px 15px;
	border: none;
	outline: none;
	color: #000;
	font-size: 14px;
	font-weight: 500;
	letter-spacing: 0.5px;
	margin-bottom: 15px;
	box-sizing: border-box;
	background: rgba(150, 150, 150, 0.34);
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
	-moz-transition: 0.5s all;
	font-family: 'Montserrat', sans-serif;
	box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-webkit-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.24);
	-ms-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-o-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
	-moz-box-shadow: 8px 8px 20px 0px rgba(0, 0, 0, 0.17);
					">
					<option value="100">100</option>
					<option value="200">200</option>
					<option value="300">300</option>
					<option value="400">400</option>
					<option value="500">500</option>
					</select>
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="mm" placeholder="Mother Maidens name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="mat" placeholder="Matric/ jamb Reg number" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="number" placeholder="phone number" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="email" name="email" placeholder="example@mail.com" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="land" placeholder="Land Lord/ Caretaker Name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="llp" placeholder="LandLord/ Caretaker phone number" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text" name="state" placeholder="state of Origin" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="file" name="pass" required="" />
				</div>
				<input type="submit" name="submit" value="Register">
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>