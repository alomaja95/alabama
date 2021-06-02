
<?php require("header.php"); ?>
<?php require_once("../../includes/Helpers/initialize.php"); ?>
<?php 
//Activating our pagination system
//1. The current page number($current_page)
$page = !empty($_GET['page']) ? (int)$_GET['page']: 1;


//2. Records per page($per_page)
$per_page = 1;


//3. total record count ($total_count)
$total_count = Photograph::count_all();

//Find all photos
//use pagination instead
//$photos = Photograph::find_all();

$pagination = new Pagination($page, $per_page, $total_count);
//instead of finding all records, just find the record 
//for this page
$sql  = "SELECT * FROM house_details ORDER BY id DESC ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$houses = Photograph::find_by_sql($sql);



?>






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
					<input type="text" disabled name="name" placeholder="Full name" required="" />
				</div>


				<div class="form-w3layouts-fields">
					<input type="text" disabled name="matric" placeholder="Matric/ utme reg " required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="text" name="phone" placeholder="phone number" required="" />
				</div>

				<div class="form-w3layouts-fields">
					<input type="file" name="pic">
				</div>

				<input type="submit" name="submit" value="Update">
				<h4><a href="index.php"> I already have an account</a></h4>
			</form>
		</div>
		<!-- // Contact form -->
	</div>
	<div class="clear"></div><br><br>
	<?php require("footer.php"); ?>