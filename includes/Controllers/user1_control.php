<?php
require_once('../includes'.DS. 'Helpers'.DS.'initialize.php');
//Class That controls the initialization 

class User1Control{

    public $message; 
    public $name;
    public $occupation;
    public $phone_number;
    public $marrital_status;
    public $state_of_origin;
    public $email;
    public $password;
   
    //constructor that loads automatimally when the class in called
    public function __construct() {
   
        //checks if the form is posted
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $occupation    = $_POST['occupation'];
            $phone_number = $_POST['phone'];
            (isset($_POST['marrital']))? $marrital = $_POST['marrital']  : $marrital = null;//checks if marriage status is posted 
            $state_of_origin = $_POST['state'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];
            //(isset($_POST['checkbox']))? $checkbox = $_POST['checkbox']  : $checkbox = null;//checks if checkbox posted 
            //validating user input
            if($this->validate_input($name, $occupation, $phone_number, $marrital, 
              $state_of_origin, $email, $password, $c_password)){
             //assigning the variable to the public vars
            $this->name             = $name;
            $this->occupation       = $occupation;
            $this->phone_number     = $phone_number;
            $this->marrital         = $marrital;
            $this->state_of_origin  = $state_of_origin;
            $this->email            = $email;
             $this->password        = $password;
            // $this->password = base64_encode(strrev(md5($password)));
            $this->addUser();
             
           }else{

           }
          
       }

   }
    
    //Attribute Validation function
    public function validate_input($name, $occupation, $phone_number, $marrital, 
      $state_of_origin, $email, $password, $c_password){
               
              //checks for empty fields
              if(empty($name) || empty($occupation) || empty($phone_number) || empty($marrital)  || 
                empty($state_of_origin)  || empty($email) || empty($password) || empty($c_password)){        
                  $message = "User added succesfuly";
                  $this->message = $message;
                  return false;
                    }
                    //checks for invalid characters  
                    if(!preg_match("/^[a-zA-Z0-9 ]*$/", $name)){
                    $message = "Your name contains invalid characters";
                    $this->message = $message;
                    return false;
                    } 
                    //validates email
                    if($this->validate_email($email) == false){
                     return false;             
                    }
                   //check if the password matches and checkbox is checked
                   return $this->password_and_c_password($password, $c_password) == true ? true : false;
                    
    }
    
    //password verification and checkbox
    public function password_and_c_password($password, $c_password){
                           //check if the password matches
                   if($password != $c_password){
                   $message = "Password doesn't match";
                   $this->message = $message;
                   return false;
                    }
                    return true;
                    //check if the checkbox is.. checked
                    //if(!empty($checkbox) && $checkbox == 'yes'){
                       // return true;
                   // }else{
                  // $message = "You need to agree to the terms of use";
                  // $this->message = $message;
                  // return false;
                  //  }
    }

    //function that vlidates user email
    public function validate_email($email){
                $user = new User1();
               //checks for invalid email
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $message= "Invalid Email, Please verify the mail";
                $this->message = $message;
                return false;
              }
              //checks if the EMAIL EXIST
              if($user->check_user_mail($email) == false){
                $message = "Email Exists, Please use another email";
                $this->message = $message;
                return false;
              }
              return true;
    }
    
    //Registration method
    public function addUser(){
        
         $user = new User1();
         $user->name = $this->name;
         $user->occupation = $this->occupation;
         $user->phone_number = $this->phone_number;
         $user->marrital_status = $this->marrital;
         $user->state_of_origin =$this->state_of_origin;
         $user->email =  $this->email;       
         //$user->image_path = "uploads\images\oyin.jpg"; //default image.
         //$user->reg_date = strftime("%Y-%m-%d %H:%M:%S", time());
         $user->password = $this->password;
         
         if($user->create() == true ){
         $session = new Session();
         $_POST['msg'] = "New Amin Add, Click OK to Login";
         $session->message("User Created, Login to Activate your session");
         redirect_to("index.php?msg=Application succefully submitted");
         } else {
                 $message = "Sorry! ): something went wrong";
                 $this->message = $message;
                 return false;
         }
    }
   
    //
}

