<?php
require_once('../includes'.DS. 'Helpers'.DS.'initialize.php');
//Class That controls the initialization 

class UserControl{

    public $message; 
    public $name;
    public $programme;
    public $matric_number;
    public $mother_maiden_name;
    public $email;
    public $password;
   
    //constructor that loads automatimally when the class in called
    public function __construct() {
   
        //checks if the form is posted
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $programme    = $_POST['programme'];
            $matric_number = $_POST['matric'];
            $mother_maiden_name = $_POST['mmn'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $c_password = $_POST['c_password'];
            //(isset($_POST['checkbox']))? $checkbox = $_POST['checkbox']  : $checkbox = null;//checks if checkbox posted 
            //validating user input
            if($this->validate_input($name, $programme, $matric_number, $mother_maiden_name, $email, $password, $c_password)){
             //assigning the variable to the public vars
            $this->name = $name ;
            $this->programme = $programme;
            $this->matric_number = $matric_number;
            $this->mother_maiden_name = $mother_maiden_name;
            $this->email = $email;
            $this->password =$password;
            // $this->password = base64_encode(strrev(md5($password)));
            $this->addUser();
             
           }else{

           }
          
       }

   }
    
    //Attribute Validation function
    public function validate_input($name, $programme, $matric_number, $mother_maiden_name, $email, $password, $c_password){
               
              //checks for empty fields
              if(empty($name) || empty($programme) || empty($matric_number) || empty($mother_maiden_name)  || empty($email) || empty($password) || empty($c_password)){        
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
                $user = new User();
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
        
         $user = new User();
         $user->name = $this->name;
         $user->programme = $this->programme;
         $user->matric_number = $this->matric_number;
         $user->mother_maiden_name = $this->mother_maiden_name;
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

