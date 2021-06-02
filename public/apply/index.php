<?php require_once("../../includes/Helpers/initialize.php"); ?>

<?php 
//initializing the user class for registration
$new_user = new UserHouseControl();
// object of the class user that control error message
$message = $new_user->message

?>

<?php if(!empty($message)) { ?>
	
	<script>
	alert("<?php echo $message; ?>");
	</script>
<?php } ?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Alabama Housing Application</title>
	<meta name="keywords" content="Appoint My Doctor Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/stylereg.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
	<a href="../index.php"><input type="button" value="HOME" style="margin-right:50%; "></a>
		<h1>Register a  House</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter house Details</h2>
				<p>Fill the form below and submit your query we will contact you as soon as possible.</p>
			</div>
			<div class="agile-form">
				<form action="index.php" method="POST">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Full Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="name" placeholder="Applicant Full Name" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
								</select>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="number" placeholder="Mobile Number" required >
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Email
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="email (optional)" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Date of Birth
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">
									<select name="day" class="day">
										<option>&nbsp;</option>
										<option value="1"> 1 </option>
										<option value="2"> 2 </option>
										<option value="3"> 3 </option>
										<option value="4"> 4 </option>
										<option value="5"> 5 </option>
										<option value="6"> 6 </option>
										<option value="7"> 7 </option>
										<option value="8"> 8 </option>
										<option value="9"> 9 </option>
										<option value="10"> 10 </option>
										<option value="11"> 11 </option>
										<option value="12"> 12 </option>
										<option value="13"> 13 </option>
										<option value="14"> 14 </option>
										<option value="15"> 15 </option>
										<option value="16"> 16 </option>
										<option value="17"> 17 </option>
										<option value="18"> 18 </option>
										<option value="19"> 19 </option>
										<option value="20"> 20 </option>
										<option value="21"> 21 </option>
										<option value="22"> 22 </option>
										<option value="23"> 23 </option>
										<option value="24"> 24 </option>
										<option value="25"> 25 </option>
										<option value="26"> 26 </option>
										<option value="27"> 27 </option>
										<option value="28"> 28 </option>
										<option value="29"> 29 </option>
										<option value="30"> 30 </option>
										<option value="31"> 31 </option>
									</select>
									<label class="form-sub-label1"> Day </label>
								</span>
								<span class="form-sub-label">
									<select name="month">
										<option>&nbsp;</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
									<label class="form-sub-label1"> Month </label>
								</span>
								<span class="form-sub-label">
									<input type="text" class="year" name="year" placeholder=" Enter Year" required>
									<label class="form-sub-label1"> Year </label>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="address" placeholder="adrees of the house " required="require">
									<label class="form-sub-label1"> Street Address </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="city" placeholder="city where house is built " required= :"require">
									<label class="form-sub-label1"> City </label>
								</span>
							</div>
						</li>
						<li class="last-type"> 
							<label class="form-label1">
								Select which types of house to register.
								<span class="form-required"> * </span>
							</label>
															<span class="form-sub-label">
									<select name="house">
										<option>&nbsp;</option>
										<option value="single room"> Single Room</option>
										<option value="Self Contained"> Self Contained </option>
										<option value="Flat"> Flat </option>
									 </select>
									</span>
									<span class="form-sub-label">
								<input type="text" name="vacancy" placeholder="Number Available">
</span>
						</li>
					</ul>
					<input type="submit" name="submit" value="Apply">
				</form>	
			</div>
		</div>
		<div class="copyright">
			<p>© 2019 ALABAMA. All rights reserved | Design by <a href="../index.php">classic</a></p> 
		</div>
	</div>
</body>
</html>