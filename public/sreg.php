
<?php require("header1.php"); ?>
<?php require_once("../includes/Helpers/initialize.php"); ?>

<?php 
//initializing the user class for registration
$new_user = new UserControl();
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
			<form action="sreg.php" method="POST">

				<div class="form-w3layouts-fields">
					<input type="text" name="name" placeholder="Full name" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="programme" placeholder="programme" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="matric" placeholder="Matric/ utme reg " required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="mmn" placeholder="mother's maiden name" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="email" name="email" placeholder="email" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="password" name="password" placeholder="password" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="password" name="c_password" placeholder="confirm password" required="" />
				</div>
				<input type="submit" name="submit" value="Register">
				<h4><a href="index1.php"> I already have an account</a></h4>
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>