<?php
//calling our database class
require_once('../includes'.DS.'Models'.DS.'database.php');
class User2 extends DatabaseObject {
    
    //our database columns are attributes individually
    //database column variables
    protected static $table_name = "fresher";
    protected static $db_fields = array('id', 'name', 'email', 'number', 'har', 'dept', 'faculty', 'mat', 'mm', 'level', 'land',  'llp',  'state', 'pass');

     public $message; 
    public $name;
    public $email;
    public $number;
    public $har;
    public $dept;
    public $faculty;
    public $mat;
    public $mm;
    public $level;
    public $land;
    public $llp;
    public $state;
    public $pass;
   
   

    //function that returns user full name
     public function full_name(){
        if(isset($this->first_name) && isset($this->last_name)){
            return $this->first_name . "  " . $this->last_name;
        } else {
            return " ";
        }
    }

    //function to check if user is registered
    public static function verify_user($email="", $password=""){
        global $database;
        $email = $database->escape_value($email);
        $password = $database->escape_value($password);
        
        //cheeck if the email is registered
        if(self::check_user_mail($email) == true){ //true here in this case means there is no record with that mail in the database 
            $_POST['msg'] = "Invalid Email (:";
            return false;
        }
        //checks if the password is correct
        if(self::verify_password($email, $password)==false){
           $_POST['msg'] = "Invalid Password (:";
            return false;
        }
        return true;
    }
    
    //function that validates if mail is registered.
    public static function check_user_mail($email){
        global $database;
        $sql  = " SELECT * FROM ". static::$table_name . "";
        $sql .= " WHERE email = '{$email}' ";
        $sql .= " LIMIT 1";
      
        $result_set = $database->query($sql);
        if($database->num_rows($result_set) == 1){
             return false;
        }else{
           return true;
        }
  
    }

    //hashed_password verification function 
    public static function  verify_password($email, $password){
        global $database;
        $sql  = " SELECT * FROM ". static::$table_name . "";
        $sql .= " WHERE email = '{$email}' ";
        $sql .= " LIMIT 1";
        $result_set = $database->query($sql);
        $record = $database->fetch_array($result_set);
        $hashed_password = $password;
        // $hashed_password = base64_encode(strrev(md5($password)));
        
        if($record['password'] != $hashed_password){
           return false;
        }
        return true;
    }
    
    //user authentication Method
    public static function authenticate($email=""){
        global $database;
        
        $email = $database->escape_value($email);

        $sql  = " SELECT * FROM " . static::$table_name . "";
        $sql .= " WHERE email = '{$email}' ";
        $sql .= " LIMIT 1";

        $result_array = self::find_by_sql($sql);
        return !empty($result_array) ? array_shift($result_array) : FALSE;
    }
 
   /* common Database Methods that performs the database operation has been
    * Moved into databaseObject class
    * 
   */
    

   }

    

   
