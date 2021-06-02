<?php require_once("../includes/Helpers/initialize.php"); ?>


<?php
//makes sure we get an id
if(empty($_GET['key'])){
    $_POST['msg'] = "No Staff was provided";
    $message = $_POST['msg'];
    //redirect_to('ward_list');
}

//find the photo with the provided id
$staff = Doctor::find_by_Staff_ID($_GET['key']);
if(!$staff){
    $_POST['msg'] = "the worker could not be located";
    $message = $_POST['msg'];
    //redirect_to('index.php');
}

//update ward
//initialising the user class for registration
$new_staff = new DoctorControl();
//Object of the class user that controls error messages
$message = $new_staff->message;


?>

<?php if(!empty($message)){ ?>
    <script type="text/javascript">
        alert("<?php echo $message; ?>");
    </script>
<?php  } ?>

<?php  include_layout_template("header.php"); ?>
<?php  include_layout_template("sidebar.php"); ?>
<section id="main-content">
    <section class="wrapper">



        <!-- The form section-->
        <div class="form-w3layouts">
            <!-- page start-->
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update Doctor's Information
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="update_doctor.php?key=<?php echo $_GET['key']; ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">DoctorID</label>
                                        <input type="text" value = "<?php echo $staff->DoctorID; ?>"  name="doctor_id" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Doctor's Name</label>
                                        <input type="text" value = "<?php echo $staff->DoctorName; ?>"  name="name" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father's Name</label>
                                        <input type="text" name="f_name" value = "<?php echo $staff->FatherName; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="address" value = "<?php echo $staff->Address; ?>"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Contact No</label>
                                        <input type="number" name="number" value = "<?php echo $staff->ContactNo; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email</label>
                                        <input type="email" name="email" value = "<?php echo $staff->Email; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Qualification</label>
                                        <input type="text" name="qual" value = "<?php echo $staff->Qualifications; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Specialization</label>
                                        <input type="text" name="spec" value = "<?php echo $staff->Specialization; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Gender</label>
                                        <input disabled type="text" value = "<?php echo $staff->Gender; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Reset Gender</label>
                                        <select class="form-control m-bot15" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Blood Group</label>
                                        <input type="text" disabled value = "<?php echo $staff->BloodGroup; ?>" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Reset Blood Group</label>
                                        <select class="form-control m-bot15" name="blood_group">
                                            <option value="0+">0+</option>
                                            <option value="0-">0-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Date of Joining</label>
                                        <input type="date" name="date_joined" value = "<?php echo $staff->DateOfJoining; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button type="submit" class="btn btn-success" name="update">Save</button>

                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>





                    </section>

                </div>

            </div>
            <!-- page end-->
        </div>
    </section>



    <?php include_layout_template("footer.php"); ?>


