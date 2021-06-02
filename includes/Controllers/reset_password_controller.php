<?php 
require_once('../includes'.DS. 'Helpers'.DS.'initialize.php');

/**
* 
*/
class ResetPassword 

{
	public $verification_code = null;
	
	function __construct()
	{
		# code...
	}

	public function passwordReset(){
		if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		if (!empty($email)) {
			$this->validateEmail($email);
		}
	}
}

// validate a valid email id
	public function validateEmail($email){
					//checks for student and non students
					if($this->checkStudent($email) == false ){
							$_POST['msg'] = "enter a valid mail";
				    return false;	
	  					//$this->validateStudentEmail($email);
					}elseif($this->checkStudent($email) == false ){
					//checks for non students
					if($this->checkNonStudent($email) == true){
						$this->validateNonStudentEmail($email);
					}
				}else{
					$_POST['msg'] = "enter a valid mail";
				    return false;	
				}
				
						
	}

//validate student email
	public function validateStudentEmail($email){
		$varification_code = $this->randomNumber();
		$send_code = $this->sendVerificationCode($email, $verification_code);
		($send_code == true)? redirect_to("validate_code.php"): $_POST['msg']= "unable to send verification code" ;
		
	}
//validate Non student email
	public function validateNonStudentEmail($email){
		$varification_code = $this->randomNumber();
		$send_code = $this->sendVerificationCode($email, $verification_code);
		($send_code == true)? redirect_to("validate1_code.php"): $_POST['msg']= "unable to send verification code" ;
		
	}

	// to generate 6 didgit random number
	public function randomNumber(){
		 $rand = rand(000001, 999999);
		 return rand;		
	} 


	public function checkVerificationCode($ver_code){
		if($this->verification_code == $ver_code){
			return true;
		}
		return false;
 
	}

	public function ValidateCode(){
		$ver_code = $_POST['v_code'];
		$check_code = $this->checkVerificationCode($ver_code);
		if ($ver_code == true) {
			# code...
			redirect_to("update_password.php");
		}else{

			$_POST['msg'] = "Invalid verification code";
		}

	}

	public function Validate1Code(){
		$ver_code = $_POST['v_code'];
		$check_code = $this->checkVerificationCode($ver_code);
		if ($ver_code == true) {
			# code...
			redirect_to("update1_password.php");
		}else{

			$_POST['msg'] = "Invalid verification code";
		}

	}

	public function sendVerificationCode($email, $verification_code){
		$email = new Mail();
		$email = reset_pass_ver_code($email, $verification_code);
		if ($email==true) {
			return true;	
		}else
			{
		  return false;
		}
		

	}

	public function checkStudent($email){
		//student
		$user = new User();
		if($user->check_user_mail($email) == false){
			$_POST['user'] = $email;
			return true;
		}else
			{
			return false;
		}	

	}

	public function checkNonStudent($email){

		//non student
		$user = new User1();
		$user->check_user_mail($email);
	 	if($user == false){
			$_POST['user'] = $email;
			return true;
		}else
			{
			return false;
		}
	}

	public function oleThief(){

		if (!isset($_POST['user'])) {
			redirect_to('../index.php');
		}
	}

	 public function updatePassword(){
	 	//update students
	 	if ($_POST['student_submit']) {
	 		$password = $_POST['password'];
	 		$c_password = $_POST['c_password'];

	 		if ($password == $c_password) {
	 			$this->updateUser($password);
	 		}
	 	$_POST['msg'] = "password don't match ";
		return false; 
	 	}
	 	

	 		if ($_POST['non_submit']) {
	 		// for non students
	 		$password = $_POST['password'];
	 		$c_password = $_POST['c_password'];

	 		if ($password == $c_password) {
	 			$this->update1User($password);
	 		}
	 	$_POST['msg'] = "password don't match ";
		return false; 
	 	}

	 }
	//student password update function
	public function UpdateUser($password){
		global $database;
		$sql = "UPDATE TABLE students  SET password = $password WHERE email = $email;";
		$database->query($sql);
		if ($database -> affected_rows() == 1 ) {
			redirect_to("login.php");
		
		}
		$_POST['msg'] = "password update failed";
		return false; 
	}

	//non student password update function
	public function Update1User(){
		global $database;
		$sql = "UPDATE TABLE tenant  SET password = $password WHERE email = $email;";
		$database->query($sql);
				if ($database -> affected_rows() == 1 ) {
			redirect_to("index.php");
		
		}
		$_POST['msg'] = "password update failed";
		return false; 
	}


}