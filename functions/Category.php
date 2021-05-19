<?php 

class Category{

  private static $Db = null;
  private static $tableName = "categories";
  private static $role = 1;



  public static function addCategory(){

  }

  public static function updateCategory(){
    
  }

  public static function deleteCategory(){
    
  }

  /**
   * @Desc This functoin sets the database instance for the customer
   */
  public static function setDb($dbInstance)
  {
      self::$Db = $dbInstance;
  }


}