<?php
//calling our database class
require_once('../includes'.DS.'Models'.DS.'database.php');
class Comment extends DatabaseObject {
    //our database columns are attributes individually
    //database column variables
    protected static $table_name = "comments";
    protected static $db_fields = array('id', 'photograph_id', 'created', 'author',
    'body'
    );

    public $id;
    public $photograph_id;
    public $created;
    public $author;
    public $body;



    public static function make($photo_id, $author="Anonymous", $body=""){
      if (!empty($photo_id) && !empty($author) && !empty($body)) {
        // code...
        $comment = new Comment();
        $comment->photograph_id = (int)$photo_id;
        $comment->created = strftime("%Y-%m-%d %H:%M:%S", time());
        $comment->author = $author;
        $comment->body = $body;
        return $comment;
      }else {
        // code...
        return FALSE;
      }
    }
    
    //methods to find comment that belongs to a photograph
    public static function find_comments_on($photo_id=0){
      global $database;
      $sql = "SELECT * FROM ". self::$table_name;
      $sql .= " WHERE photograph_id=" .$database->escape_value($photo_id);
      $sql .= " ORDER BY created ASC";
      return self::find_by_sql($sql);
    }
    
    



   /* common Database Methods 
    * Moved into database object class
    * 
   */
    
   }
