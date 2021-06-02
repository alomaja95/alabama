<?php require("header.php"); ?>

<?php
//makes sure we get an id
if(empty($_GET['id'])){
    $_POST['msg'] = "No item selected yet";
    $message = $_POST['msg'];
    //redirect_to('ward_list');
}

//find the photo with the provided id
$user = User::find_by_id($_GET['id']);
if(!$user){
    $_POST['msg'] = "the item could not be located";
    $message = $_POST['msg'];
    //redirect_to('index.php');
}

?>
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
			<form action="#" method="POST">
				<div class="form-w3layouts-fields">
					<input type="text"  disabled name="name" value="<?php echo $user->name ?>"  placeholder="Full name" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text"  disabled name="matric" value="<?php echo $user->matric_number ?>"  placeholder="Matric number" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="text"  name="phone" placeholder="Phone number" required="" />
				</div>
				<div class="form-w3layouts-fields">
					<input type="file" />
				</div>

				<input type="submit" name="submit" value="Update">
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>