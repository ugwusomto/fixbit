<?php


class Admin
{
    private static $Db = null;
    private static $tableName = "users";
    private static $role = 1;
    private static $super_role = 2;


    /**
     * @Desc This function processes admin register
     * @param post An array of post data for the admin
     */

    public static function registerAdmin($post = [])
    {

        $messageBox = [];
        $formData = [];
        extract($post);

        //  check for username
        if (!empty($username)) {
           if(self::adminUsernameExists($username) == false){
            $formData["username"] = $username;
           }else{
            $messageBox["username"] = "Username already exists";
           }
            
        } else {
            $messageBox["username"] = "Please enter username";
        }

        //  check for email
        if (!empty($email)) {
          if(self::adminEmailExists($email) == false){
            $formData["email"] = $email;
           }else{
            $messageBox["email"] = "email already exists";
           }
        } else {
            $messageBox["email"] = "Please enter email";
        }

        //  check for password
        if (!empty($password)) {
            $formData["password"] = sha1($password);
        } else {
            $messageBox["password"] = "Please enter password";
        }

        if(empty($messageBox)){
           $result =  self::insertAdmin($formData);
           if($result){
             $messageBox["status"] = "success";
             $messageBox["message"] = "Registeration Successfull";
             return $messageBox;
           }else{
            $messageBox["status"] = "error";
            $messageBox["message"] = "Please something went wrong";
            return $messageBox;
           }
        }else{
          $messageBox["status"] = "error";
          return $messageBox;
        }
    }

    public static function setDb($dbInstance)
    {
        self::$Db = $dbInstance;
    }

    private static function insertAdmin($data){
      extract($data);
      $sql = "INSERT INTO ".self::$tableName."(`username`,`email`,`password`,`role`) VALUES('$username','$email','$password','".self::$role."')";
      $result =  self::$Db->query($sql);
      if($result){
        return true;
      }
      return false;
    }


    private static function adminEmailExists($email){
      $sql = "SELECT `email` FROM ".self::$tableName." WHERE `email`='$email'";
      $result = self::$Db->query($sql);
      if($result->num_rows > 0){
        return true;
      }else{
        return false;
      }
    }

    private static function adminUsernameExists($username){
      $sql = "SELECT `username` FROM ".self::$tableName." WHERE `username`='$username'";
      $result = self::$Db->query($sql);
      if($result->num_rows > 0){
        return true;
      }else{
        return false;
      }
    }


    /**
     * @desc This function selects all the admins
     */
    public static function getAllAdmins(){
      $sql = "SELECT * FROM ".self::$tableName." WHERE `role` IN(".self::$role.",".self::$super_role.")";
      $result = self::$Db->query($sql);
      if($result->num_rows > 0){
        $rows = [];
        while($data = $result->fetch_assoc()){
          $rows[] = (object) $data; //casting 
        }
        return $rows;
      }else{
        return array();
      }
    }

    /**
     * @Desc This function gets the record of a single admin by id
     * @param interger id
     */
    public static function getAdminById($id)
    {
      $sql = "SELECT * FROM ".self::$tableName." WHERE `id`='$id'";
      $result = self::$Db->query($sql);
      if($result->num_rows > 0){
        $admin = (object) $result->fetch_assoc();
        return  $admin;
      }else{
        return [];
      }
    }


    /**
     * @Desc This record updated the admin data
     */
    public static function  updateAdminById($post = []){
      $messageBox = [];
      $formData = [];
      extract($post);

      //  check for username
      if (!empty($username)) {
         if(self::adminUsernameExists($username) == false){
          $formData["username"] = $username;
         }else{
          $messageBox["username"] = "Username already exists";
         }
          
      } else {
          $messageBox["username"] = "Please enter username";
      }

      //  check for email
      if (!empty($email)) {
        if(self::adminEmailExists($email) == false){
          $formData["email"] = $email;
         }else{
          $messageBox["email"] = "email already exists";
         }
      } else {
          $messageBox["email"] = "Please enter email";
      }

      //  check for password
      if (!empty($password)) {
          $formData["password"] = sha1($password);
      }else{
        $messageBox["password"] = "Please enter password";
      }

      if(empty($messageBox)){
        extract($formData);
        $sql = "UPDATE ".self::$tableName." SET username='$username', email='$email', password='$password' WHERE id='$id'";

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
      }else{
        $messageBox["status"] = "error";
        return $messageBox;
      }
    }


    /**
     * @Desc This function deletes an admin by the ID
     * @param id integer
     */
    public static function deleteAdminById($id,$role) : bool
    {
      if($role == self::$super_role){
        $message = ["message"=>"You can not delete this super Admin ","status"=>"error"];
        echo json_encode($message);
         return false;
       }
       $sql = "DELETE FROM ".self::$tableName." WHERE `id`='$id'";
       $result = self::$Db->query($sql);
       if($result){
         $message = ["message"=>"Admin successfully deleted","status"=>"success"];
         echo json_encode($message);
         return true;
       }else{
        $message = ["message"=>"Admin failed to delete ","status"=>"error"];
        echo json_encode($message);
         return false;  
       }
    }





}
