<?php require_once("../includes/Helpers/initialize.php"); ?>
<?php
//makes sure we get an matric amd mothers madian name
if(isset($_POST['monitor'])){
	if(empty($_POST['mat']) || (empty($_POST['mm']))){
    $_POST['msg'] = "No item selected yet";
    $message = $_POST['msg'];
    //redirect_to('ward_list');
}

//find the photo with the provided id
$user = user2::find_by_mat_and_mm($_POST['mat'], $_POST['mm']);
if(!$user){
    $_POST['msg'] = "the item could not be located";
    $message = $_POST['msg'];
    //redirect_to('index.php');
}


}


?>
<?php if(!empty($message)) { ?>
	
	<script>
	alert("<?php echo $message; ?>");
	</script>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>fresher_page</title>
</head>
<body>
<center><h2>ALABAMA ESTATE MANAGEMENT LIMITED</h2>
<h3><i>km. 2 Okitipupa / Igbokoda road, Ayeka, Ondo State</i></h3>
<h4>email: alabamahub600@gmail.com. || phone: 09066619111 or 08034206700</h4>

<style>
	.form{
		margin: auto;
	}
	.form tr{
			height: 8px;
	}
	.title{
		width: 75%;
	}
</style>
<h3>STUDENTS RESIDENCE FORM</h3>
</center>

<div style="width: 100px; height: 100px; border: 1px solid #000; margin-top: -2%; margin-left: 80%;" ><img src="<?php echo $user->pass; ?>" style= "height: 100%; width: 100%;" ></div>

<div style="margin-top: -5%;">
<table class="form">
<tr>
<td class="title">Full name: </td>
<td><?php echo $user->name; ?></td>
</tr>
<tr>
<td class="title">Hostel / Lodge Address : </td>
<td><?php echo $user->har; ?></td>
</tr>
<tr>
<td class="title">Faculty : </td>
<td><?php echo $user->faculty; ?></td>
</tr>
<tr>
<td class="title">Department : </td>
<td><?php echo $user->dept; ?></td>
</tr>
<tr>
<td class="title">Level :</td>
<td><?php echo $user->level; ?></td>
</tr>
<tr>
<td class="title">Mother's Maiden Name : </td>
<td><?php echo $user->mm; ?></td>
</tr>
<tr>
<td class="title">JAMB reg | Matric number : </td>
<td><?php echo $user->mat; ?></td>
</tr>
<tr>
<td class="title">Phone Number :  </td>
<td><?php echo $user->number; ?></td>
</tr>
<tr>
<td class="title">E-mail: </td>
<td><?php echo $user->email; ?></td>
</tr>
<tr>
<td class="title">Landlord's / Caretaker's Name : </td>
<td><?php echo $user->land; ?></td>
</tr>
<tr>
<td class="title">Landlord's / Caretaker's phone number : </td>
<td><?php echo $user->llp; ?></td>
</tr>
<tr>
<td class="title">State of Origin </td>
<td><?php echo $user->state; ?></td>
</tr>

</table>


</div>
<br><br>

<center><button onclick="window.print(); return false;" value="print">print</button></center>
</center>
</body>
</html>