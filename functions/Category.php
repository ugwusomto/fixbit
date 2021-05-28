<?php 

class Category{

  private static $Db = null;
  private static $tableName = "categories";
  private static $role = 1;




  


  public static function addCategory(){
    $category_name = $_POST['category'];

    $sql = "INSERT INTO " . self::$tableName . "(`name`) VALUES('$category_name')";
    $result =  self::$Db->query($sql);
    if ($result) {
      $messageBox["status"] = "success";
      $messageBox["message"] = "Category Added Successfully";
      header("Refresh:2, url = ../admin/view-category.php?");
        return $messageBox;
    }
    $messageBox["status"] = "error";
    $messageBox["message"] = "Something Went wrong";
    return $messageBox;

  }

  public static function getAllCategory(){
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


  public static function getCategoryById($id)
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

  public static function UpdateCategoryById($id, $new_category_name)
  {
    // $new_category_name = $_POST['category'];
    $sql = "UPDATE ".self::$tableName." SET name='$new_category_name' WHERE id='$id'";

    $result = self::$Db->query($sql);   
     if($result){
       $messageBox["status"] = "success";
       $messageBox["message"] = "Update Successfull";
       return $messageBox;
     }else{
      $messageBox["status"] = "error";
      $messageBox["message"] = "Please something went wrong";
      return $messageBox;
     }
  }

  public static function deleteCategoryId($id) : bool
  {
     $sql = "DELETE FROM ".self::$tableName." WHERE `id`='$id'";
     $result = self::$Db->query($sql);
     if($result){
       $message = ["message"=>"Category was successfully deleted","status"=>"success"];
       echo json_encode($message);
       return true;
     }else{
      $message = ["message"=>"Category failed to delete ","status"=>"error"];
      echo json_encode($message);
       return false;  
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