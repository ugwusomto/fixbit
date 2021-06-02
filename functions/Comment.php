<?php

class Comment 
{
    private static $Db = null;
    private static $tableName = "comments";




    /**
     * @Desc This function  is used to add a commentto the database
     * @param Array comment
     */
    public static function AddComment($comment)
    {
        extract($comment);
      
        $user_id = $_SESSION['customer_id'];
        $sql = "INSERT INTO ".self::$tableName."(`user_id`,`post_id`,`comment`) VALUES('$user_id','$post_id','$comment')";
        // Utils::see($sql);
        $result =  self::$Db->query($sql);
        if ($result) {
            return true;
        }
        return false;
    }


    
    public static function getAllComments(){
      $sql = "SELECT users.username , comments.* FROM `comments` LEFT JOIN `users` ON `comments`.`user_id` = `users`.`id`";
      $result = self::$Db->query($sql);
      if ($result->num_rows > 0) {
          $rows = [];
          while ($data = $result->fetch_assoc()) {
              $rows[] = (object) $data; //casting
          }
          return $rows;
      } else {
          return array();
      }
    }

    

    /**
     * @Desc This functoin sets the database instance for the customer
     */
    public static function setDb($dbInstance)
    {
        self::$Db = $dbInstance;
    }
}
