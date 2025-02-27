  <?php
 require_once ('../includes'.DS.'Models'.DS.'config.php');
 require_once ('../includes'.DS.'Models'.DS.'createdb.php');

 //MySQLDatabase class
 class MySQLDatatbase{
     //private connection variable
     private $connection;
     //public variable that returns the last query
     public $last_query;
     //escape_value() check variables
     private $magic_quotes_active;
     private $real_escape_string_exists;

     //the constructor thst gets called automatically when the program runs
     function __construct() {
         $this->open_connection();
         $this->magic_quotes_active = get_magic_quotes_gpc();
         $this->real_escape_string_exists = function_exists("mysqli_real_escape_string");
     }

     //function that opens severe and database connection
     public function open_connection(){
         $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
         if(!$this->connection){
             die("connection failed " . mysqli_error());
         } else {

             //select the database if exist or just created
            $db_select = mysqli_select_db($this->connection, DB_NAME);
            if(!$db_select){
                die("database selection failed" . mysqli_error());
            }
         }
     }

     //function that closes sever and databse connection
     public function close_connection(){
         if(isset($this->connection)){
             mysqli_close($this->connection);
             unset($this->connection);
         }
     }

     //function that handles our sql query
     public function query($sql){
         $this->last_query = $sql;
         $result = mysqli_query($this->connection, $sql);
         $this->confirm_query($result);
         return $result;
     }

     //function that prepares sql for magic quotes
     public function escape_value($value){

         if($this->real_escape_string_exists){
             //undo any magic quotes effects so mysqli_real_escape_string can do the work
             if($this->magic_quotes_active){
                 $value = stripslashes($value);}
              $value = mysqli_real_escape_string($this->connection,$value);
         } else { // before php v4.3.0
             //if magic quotes isn't already on then add slashes manually
             if(!$this->magic_quotes_active){
                 $value = addslashes($value);
             }
             //if magic quotes are active then the slashes already exist
         }
         return $value;
     }

     //function that makes the code support other web based DBMS
     public function fetch_array($result_set){
         return mysqli_fetch_array($result_set);
     }

     //fuction the returns the number affected rows
     public function num_rows($result_set){
         return mysqli_num_rows($result_set);
     }

     //function that get the last inserted id over the current db_connection
     public function insert_id(){
         return mysqli_insert_id($this->connection);
     }

     //function that returns the rows affected by query
     public function affected_rows(){
         return mysqli_affected_rows($this->connection);
     }

     //function that confirms the success or failure of our query
     private function confirm_query($result){
         if(!$result){
             $output = "database query failed: " . mysqli_error($this->connection) . "<br/><br/>";
             $output .= "Last SQL query: " . $this->last_query;
             die($output);
         }
     }
 }

//initialising the MySQLDdatabase connection class
$database = new MySQLDatatbase();
$db =& $database;
