<?php

class Post 
{
    private static $Db = null;
    private static $tableName = "posts";
    private static $role = 1;



    /**
     * @Desc This function  is used to add a post to the database
     * @param Array posts
     */
    public static function AddPost($post)
    {
        extract($post);
      
        $user_id = $_SESSION['admin_id'];
        $sql = "INSERT INTO ".self::$tableName."(`title`,`content`,`image`,`user_id`,`category_id`) VALUES('$title','$content','$image','$user_id','$category_id')";
        // Utils::see($sql);
        $result =  self::$Db->query($sql);
        if ($result) {
            return true;
        }
        return false;
    }


    public static function getAllPosts(){
      $sql = "SELECT * FROM " . self::$tableName;
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

    public static function getAllPostsByCategory($id){
      $sql = "SELECT * FROM " . self::$tableName." WHERE `category_id`='$id'";
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
 


    public static function getPostById($id)
    {
      $sql = "SELECT * FROM ".self::$tableName." WHERE `id`='$id'";
    
      $result = self::$Db->query($sql);
      if($result->num_rows > 0){
        $category = $result->fetch_assoc();
        return  $category;
      }else{
        return [];
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
