<?php
//require_once(LIB_PATH.DS. 'Helpers'.DS.'initialize.php');

class ImageProcessor{
    /************Image processing Parameters*************/
    //file names
    public $pass_filename;
    //file types
    public $pass_type;
    //file sizes
    public $pass_size;
    //file temprorary paths
    private $pass_temp_path;
    //file targetpath 
    public $pass_target_path;

    //file_upload_directory
    protected $upload_dir = "uploads\students";
    public  $errors = array();
    /************End of Image processing Parameters**********/
    
    protected $uploads_errors = array(
        //http://www.php.net/manual/en/features.file-upload.errors.php
        UPLOAD_ERR_OK         => "No error.",
        UPLOAD_ERR_INI_SIZE   => "Larger than upload max_file_size.",
        UPLOAD_ERR_FORM_SIZE  => "Larger than max_file_size.",
        UPLOAD_ERR_PARTIAL    => "partial UPLOAD.",
        UPLOAD_ERR_NO_FILE    => "No file.",
        UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
        UPLOAD_ERR_CANT_WRITE => "cant write to disk.",
        UPLOAD_ERR_EXTENSION  => "file upload stopped by extension."
    );

    
    //constructor that accepts the image parameters parameters
    public function __construct() {
        
    }
    //function that takes the parameters
    public function imageSanitizer($pass){
        $this->attach_file($pass);
    }
    
    //Pass in $_FILE(['uploaded_file']) as an argument
    public function attach_file($pass){
        //Perform error checking on the form parameters
        if((!$pass || empty($pass))){
            //error: nothing uploaded or wrong argument usage
            $this->errors[] = "No file was uploaded.";
            $message = "Some Image Files Were Missing";
            $this->message = $message;
            return FALSE;
        }elseif ($pass['error'] != 0) {
            //error report what php  says went wrong
            $this->errors[] = $this->uploads_errors[$pass['error']]; 
            //second line that converst the errors to a message
            $message = $this->uploads_errors[$pass['error']];
            $this->message = $message;
            return FALSE;
        }else{
            //Set object attributes to the form parameters
            $this->parameterSetter($pass);
            return TRUE;
            //and make it ready to be saved in the database
        }

    }
    
    //images parameter setter method
    public function parameterSetter($pass){
                    //setting the temporary paths
            $this->pass_temp_path  = $pass['tmp_name'];
            
            //setting the filenames
            $this->pass_filename   = basename($pass['name']);
           
            //setting the file types
            $this->pass_type       = $pass['type'];
            //setting the file size
            $this->pass_size       = $pass['size'];
    }
    
    //image processing function
    public function imageProcessor(){

        //Can't save if there are pre-existing errors
        if(!empty($this->errors)){ return FALSE; }

        //Cant save without filename
        if((empty($this->pass_filename)  || empty($this->pass_temp_path))){
            $this->errors[] = "Some files location was not available";
            $message = "Some files location was not available";
            $this->message = $message;
            return FALSE;
        }

        //Determine the target_paths
        $pass_target_path  =  $this->upload_dir .DS. $this->pass_filename;
        //seting the target paths parameters
        $this->pass_target_path  = $pass_target_path;

       //make sure the file doesn't exist
        if($this->checkFile($pass_target_path) == false){
            return false;
        } 
         //Attempt to move the file
        if($this->moveFile($pass_target_path)==false ){
            return false;
            
        } 
        //final return statement if everything is successful
         return true;    
       
    }
    
    //function that checks if the files exist
    public function checkFile($pass_target_path){
         //Make sure a file doesn't already exist in the target location
        if(file_exists($pass_target_path)) {
            $this->errors[] = "The file {$this->pass_filename} already exist.";
            $message = "The file {$this->pass_filename} already exist.";
            $this->message = $message;
            return FALSE;
        }
        return true;
    }
   
    //function that moves the files
    public function moveFile($pass_target_path){
           if(move_uploaded_file($this->pass_temp_path, $pass_target_path)) {
               
            //Success
            return TRUE;
        }else{
            //File was not moved
            $this->errors[] = "The file upload failed, possibly due to "
                . "incorect permissions on the upload folder";
            $message = "The file upload failed, possibly due to "
                . "incorect permissions on the upload folder";
            $this->message = $message;
            return FALSE;
        }
    }
    
    //function for displaying image size properly
    public function size_as_text(){
        if($this->size < 1024){
            return "{$this->size}";
        }elseif ($this->size < 1048576) {
            $size_kb = round($this->size/1024);
            return "{$size_kb} KB";
        } else {
            $size_mb = round($this->size/10485);
            return "{$size_mb} MB";
        }
    }
    
    //image upload path
    public function image_path(){
        return $this->upload_dir.DS.$this->filename;
    }
    
    
}

