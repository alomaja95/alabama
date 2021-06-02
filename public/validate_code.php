<?php require("header1.php"); ?>
<?php require_once("../includes/Helpers/initialize.php"); ?>
<?php 
$Reset =  new ResetPassword();
$Reset-> ValidateCode();

?>


<?php if(isset($_POST['msg'])) { ?>
	
	<script>
	alert("<?php echo $message = $_POST['msg']; ?>");
	</script>
<?php } ?>



<body>
	<!--background-->
	<!-- Contact form -->
	<h1>Reset password</h1>
	<div class="contact-main-w3-agile">
		<div class="top-section-wthree">
			<h2 class="sub-title">Input terification code</h2>
			<p>We are here to make you secure.</p>
		</div>
		<div class="form-agileits-w3layouts">
			<form action="vaidate_code.php" method="POST">
				<div class="form-w3layouts-fields">
					<input type="text" name="v_code" placeholder="Verification Code" required="" />
				</div>

				<input type="submit" name="submit" value="Verify">
				<h4><a href="../index.php">Home</a></h4>
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>