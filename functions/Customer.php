<?php 

class Customer{

  private static $Db = null;
  private static $tableName = "users";
  private static $role = 1;



  public static function register(){

  }

  public static function login(){
    
  }

  /**
   * @Desc This functoin sets the database instance for the customer
   */
  public static function setDb($dbInstance)
  {
      self::$Db = $dbInstance;
  }


}