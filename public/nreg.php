
<?php require("header1.php"); ?>
<?php require_once("../includes/Helpers/initialize.php"); ?>

<?php 
//initializing the user class for registration
$new_user = new User1Control();
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
			<h2 class="sub-title">Input your credentials</h2>
			<p>We are here to make you secure.</p>
		</div>
		<div class="form-agileits-w3layouts">
			<form action="nreg.php" method="POST">

				<div class="form-w3layouts-fields">
					<input type="text" name="name" placeholder="Full name" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="occupation" placeholder="occupation" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="phone" placeholder="phone number " required="" />
				</div>
				<div class="form-w3layouts-fields">
				<p style="text-align: left; color: black;" >Marital Status</p>
					<select name="marrital" style="
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
					<option value="Single">Single</option>
					<option value="Married">Married</option>
					<option value="Divorced">Divorced</option>
					<option value="Widow">Widow</option>
					<option value="Widower">Widower</option>
					</select>
				</div>
						
				<div class="form-w3layouts-fields">
					<input type="text" name="state" placeholder="state of Origin" required="" />
				</div>
				
				<div class="form-w3layouts-fields">
					<input type="email" name="email" placeholder="Email" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="password" name="password" placeholder="password" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="password" name="c_password" placeholder="confirm password" required="" />
				</div>
				<input type="submit" name="submit" value="Register">
				<h4><a href="login1.php"> I already have an account</a></h4>
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>