<?php
require_once('../includes'.DS. 'Helpers'.DS.'initialize.php');
//Class That controls the initialization 

class UserHouseControl{

    public $id;
    public $name;
    public $gender;
    public $number;
    public $email;
    public $day;
    public $month;
    public $year;
    public $address;
    public $city;
    public $house;
    public $vacancy;
    public $message;
    //constructor that loads automatimally when the class in called
    public function __construct() {
   
        //checks if the form is posted
        if(isset($_POST['submit'])){
          /*** Name **/  $name = $_POST['name'];
          /***Gender**/ (isset($_POST['gender']))? $gender = $_POST['gender']  : $gender = null;//checks if gender posted 
          /***Number**/ $number = $_POST['number'];
          /***Email**/  $email = $_POST['email'];
          /***day**/    (isset($_POST['day']))? $day = $_POST['day']  : $day = null;//checks if day posted 
          /***Month**/  (isset($_POST['month']))? $month = $_POST['month']  : $month = null;//checks if month posted 
          /***Year**/   (isset($_POST['year']))? $year = $_POST['year']  : $year = null;//checks if month posted 
          /***Address**/$address = $_POST['address'];
          /***City**/   $city = $_POST['city'];
          /***house**/  (isset($_POST['house']))? $house = $_POST['house']  : $house = null;//checks if house posted 
          /**Available**/$vacancy= $_POST['vacancy'];
            
            //validating user input
            if($this->validate_input($name, $gender, $number, $email, $day, $month, $year, $address, $city, $house, $vacancy) == true){
             //assigning the variable to the public vars
            $this->name = $name ;
            $this->gender = $gender;
            $this->number = $number;
            $this->email = $email;
            $this->day = $day;
            $this->month = $month;
            $this->year = $year; 
            $this->address = $address;
            $this->city = $city;
            $this->house = $house;
            $this->vacancy = $vacancy;
            $this->addUserHouse();
             
           }else{

           }
          
       }

   }
    
    //Attribute Validation function
    public function validate_input($name, $gender, $number, $email, $day, $month, $year, $address, $city, $house, $vacancy){
               
              //checks for empty fields
              if(empty($name) || empty($gender) || empty($number) || empty($email) || empty($day) || empty($month) || empty($year) || empty($address) || empty($city) || empty($house) || empty($vacancy)){        
                  $message = "You left a blank field";
                  $this->message = $message;
                  return false;
                    }
                    //checks for invalid characters  
                    if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name)){
                    $message = "Your name contains invalid characters";
                    $this->message = $message;
                    return false;
                    } 
                    return true;
                    //validates email
                    //if($this->validate_email($email) == false){
                     //return false;             
                   // }
                   //check if the password matches and checkbox is checked
                   //return $this->password_and_c_password($password, $c_password) == true ? true : false;
                    
    }
    
    //password verification and checkbox
   // public function password_and_c_password($password, $c_password){
                           //check if the password matches
                   //if($password != $c_password){
                  // $message = "Password doesn't match";
                  // $this->message = $message;
                  // return false;
                  //  }
                   // return true;
                    //check if the checkbox is.. checked
                    //if(!empty($checkbox) && $checkbox == 'yes'){
                       // return true;
                   // }else{
                  // $message = "You need to agree to the terms of use";
                  // $this->message = $message;
                  // return false;
                  //  }
    //}

    //function that vlidates user email
   // public function validate_email($email){
              //  $user = new User();
               //checks for invalid email
               // if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
              //  $message= "Invalid Email, Please verify the mail";
              //  $this->message = $message;
               // return false;
             // }
              //checks if the EMAIL EXIST
             // if($user->check_user_mail($email) == false){
               // $message = "Email Exists, Please use another email";
               // $this->message = $message;
             //   return false;
            //  }
             // return true;
   // }
    
    //Registration method
    public function addUserHouse(){
        
         $user = new UserHouse();
         $user->name = $this->name;
         $user->gender = $this->gender;
         $user->number = $this->number;
         $user->email = $this->email;
         $user->day = $this->day;
         $user->month = $this->month;
         $user->year= $this->year;
         $user->address = $this->address;
         $user->city = $this->city;
         $user->house_type = $this->house;
         $user->vacancy = $this->vacancy;
         //$user->image_path = "uploads\images\oyin.jpg"; //default image.
         //$user->reg_date = strftime("%Y-%m-%d %H:%M:%S", time());
         //$user->password = $this->password;
         
         if($user->create() == true ){
         $session = new Session();
         $_POST['msg'] = "NEW HOUSE REGISTERED SUCCESSFULLY!";
        $this->message = $_POST['msg'];
         $session->message("User Created, Login to Activate your session");
         //redirect_to("../index.php");
         } else {
                 $message = "Sorry! ): something went wrong";
                 $this->message = $message;
                 return false;
         }
    }
   
    //
}

