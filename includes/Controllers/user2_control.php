<?php
require_once('../includes'.DS. 'Helpers'.DS.'initialize.php');
require_once('../includes'.DS. 'Helpers'.DS.'image_processor.php');

//Class That controls the initialization 

class User2Control extends ImageProcessor{

    public $message; 
    public $name;
    public $email;
    public $number;
    public $har; //hall or residence
    public $dept;
    public $faculty;
    public $mat; //matric number
    public $mm; //mother maidens name
    public $level;
    public $land; //landlord name
    public $llp; //landlord/caretaker phone number
    public $state;
    public $pas; //pasport
    public $pass_path; //image path
    
   
    //constructor that loads automatimally when the class in called
    public function __construct() {
   
        //checks if the form is posted
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email =$_POST['email'];
            $number    = $_POST['number'];
            $har = $_POST['har'];
            $dept = $_POST['dept'];
            (isset($_POST['faculty']))? $faculty = $_POST['faculty']  : $faculty = null;//checks if faculty is posted 

            $mat = $_POST['mat'];
            $mm = $_POST['mm'];
            (isset($_POST['level']))? $level = $_POST['level']  : $level = null;//checks if level is posted 
            $land = $_POST['land'];
            $llp = $_POST['llp'];
            $state = $_POST['state'];
            $pass = $_FILES['pass'];

            //(isset($_POST['checkbox']))? $checkbox = $_POST['checkbox']  : $checkbox = null;//checks if checkbox posted 
            //validating user input
            if($this->validate_input($name, $email, $number, $har, $dept, $faculty, $mat, $mm, $level, $land,  $llp,  $state, $pass)){
             //assigning the variable to the public vars
            $this->name            = $name;
            $this->email           = $email;
            $this->number          = $number;
            $this->har             = $har;
            $this->dept            = $dept;
            $this->faculty         = $faculty;
            $this->mat             = $mat;
            $this->mm              = $mm;
            $this->level           = $level;
            $this->land            = $land;
            $this->llp             = $llp;
            $this->state           = $state;
            $this->pass            = $pass;
            $this->pass_path       = $this->pass_target_path;
            // $this->password = base64_encode(strrev(md5($password)));
            $this->addUser();
             
           }else{

           }
          
       }

   }
    
    //Attribute Validation function
    public function validate_input($name, $email, $number, $har, $dept, $faculty, $mat, $mm, $level, $land,  $llp,  $state, $pass){
               
              //checks for empty fields
              if(empty($name) || empty($email) || empty($number) || empty($har) || empty($dept) || empty($faculty) || empty($mat)  ||  empty($mm) || empty($level) || empty($land) || empty($llp)  || empty($state)|| empty($pass)){        
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
                    //attach file
                    if($this->attach_file($pass)== false){
                      return true;

                    }
                    //then image processor
                    if ($this->imageProcessor() == false) {
                      return false;
                    }
                    return true;

                   //check if the password matches and checkbox is checked
                   // return $this->password_and_c_password($password, $c_password) == true ? true : false;
                    
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
                $user = new User2();
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
        
         $user = new User2();
         $user->name = $this->name;
         $user->email = $this->email;
         $user->number = $this->number;
         $user->har = $this->har;
         $user->dept = $this->dept;
         $user->faculty = $this->faculty;
         $user->mat = $this->mat;
         $user->mm = $this->mm;
         $user->level = $this->level;
         $user->land = $this->land;
         $user->llp = $this->llp;
         $user->state = $this->state;
         $user->pass = $this->pass_path;

          //$user->image_path = "uploads\images\oyin.jpg"; //default image.
         //$user->reg_date = strftime("%Y-%m-%d %H:%M:%S", time());
         // $user->password = $this->password;
         
         if($user->create() == true ){
         $session = new Session();
         $_POST['msg'] = "New Amin Add, Click OK to Login";
         $session->message("User Created, Login to Activate your session");
         redirect_to("fresher_print.php?msg=Application succefully submitted&&email=$this->email");
         } else {
                 $message = "Sorry! ): something went wrong";
                 $this->message = $message;
                 return false;
         }
    }
   
    //
}

