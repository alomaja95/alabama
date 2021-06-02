<?php require("header1.php"); ?>
<?php require_once("../includes/Helpers/initialize.php"); ?>
<?php
//checking if the user is loogedin 

$login_user= new LoginControl();

 // login th euser if the form is posted

$login_user->loginUser1($email="", $password="");

 //$message = $login_user->message;

?>

<?php if(isset($_POST['msg'])) { ?>
	
	<script>
	alert("<?php echo $message = $_POST['msg']; ?>");
	</script>
<?php } ?>



<body>
	<!--background-->
	<!-- Contact form -->
	<h1>login</h1>
	<div class="contact-main-w3-agile">
		<div class="top-section-wthree">
			<h2 class="sub-title">Input your credentials</h2>
			<p>We are here to make you secure.</p>
		</div>
		<div class="form-agileits-w3layouts">
			<form action="login1.php" method="POST">
				<div class="form-w3layouts-fields">
					<input type="email" name="email" placeholder="Email" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="password" name="password" placeholder="password" required="" />
				</div>
				<input type="submit" name="submit" value="Login">
				<h4><a href="nreg.php">Register</a></h4>
				<h4><a href="reset_password.php">forgot password</a></h4>
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>