    <?php
  //define the core path
  //define them as absolute paths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a php pre-defined constant
// C\ for windows, / for Unix


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
 

//defined('SITE_ROOT') ? null:
//define('SITE_ROOT', 'C:'.DS.'xampp'.DS.'htdocs'.DS.'alabama');
//defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
           
        //load config file first
        require_once('../includes'.DS. 'Models'.DS.'config.php');
        
        //loading basic functions next so that everything after can use them
        require_once('../includes'.DS.'Helpers'.DS.'functions.php');
        
        //load core objects
        require_once('../includes'.DS.'Controllers'.DS.'session.php');
        require_once('../includes'.DS.'Models'.DS.'database.php');
        require_once('../includes'.DS.'Models'.DS.'database_object.php');
        require_once('../includes'.DS.'Models'.DS.'pagination_model.php');
        require_once('../includes'.DS.'Models'.DS.'createdb.php');
        require_once('../includes'.DS.'Controllers'.DS.'pagination_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'photo_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'user_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'user1_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'user2_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'user_house_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'user_land_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'comment_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'login_control.php');
        require_once('../includes'.DS.'Controllers'.DS.'reset_password_controller.php');
        require_once('../includes'.DS.'Helpers'.DS."PHPMailer".DS."PHPMailerAutoload.php");
        require_once('../includes'.DS.'Helpers'.DS."mail.php");
        require_once('../includes'.DS.'Helpers'.DS."PHPMailer".DS."mail_credentials.php");
        require_once('../includes'.DS.'Helpers'.DS."image_processor.php");

        //load database(Model) related classes
        require_once('../includes'.DS.'Models'.DS.'user.php');
        require_once('../includes'.DS.'Models'.DS.'user1.php');
        require_once('../includes'.DS.'Models'.DS.'user2.php');
        require_once('../includes'.DS.'Models'.DS.'user_house.php');
        require_once('../includes'.DS.'Models'.DS.'user_land.php');
        require_once('../includes'.DS.'Models'.DS.'photograph.php');
        require_once('../includes'.DS.'Models'.DS.'land.php');
        require_once('../includes'.DS.'Models'.DS.'comment.php');
    
   