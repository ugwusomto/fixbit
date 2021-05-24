<?php 

class Post{

  private static $Db = null;
  private static $tableName = "posts";
  private static $role = 1;



  /**
   * @Desc This function  is used to add a post to the database 
   * @param Array posts
   */
  public static function AddPost($post){

  }
 

  /**
   * @Desc This functoin sets the database instance for the customer
   */
  public static function setDb($dbInstance)
  {
      self::$Db = $dbInstance;
  }


}