<?php


class Admin
{
    private static $Db = null;
    private static $tableName = "users";
    private static $role = 1;

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
}