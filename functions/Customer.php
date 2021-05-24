<?php 

  class Customer{

      private static $Db = null;
      private static $tableName = "users";
      private static $role = 0;

    

      public static function register($post = [])
      {

          $messageBox = [];
          $formData = [];
          extract($post);
          
          //  check for username
          if (!empty($username)) {
            if(self::custormerUsernameExist($username) == false){
              $formData["username"] = $username;
            }else{
              $messageBox["username"] = "Username already exists";
            }
              
          } else {
              $messageBox["username"] = "Please enter username";
          }


            //  check for email
          if (!empty($email)) {
            if(self::custormerEmailExist($email) == false){
              $formData["email"] = $email;
            }else{
              $messageBox["email"] = "email already exists";
            }
          } else {
              $messageBox["email"] = "Please enter email";
          }

          
          //  check for password
          if (!empty($password)) {
            $formData["password"] = $password;
        } else {
            $messageBox["password"] = "Please enter password";
        }

          if(empty($messageBox)){
            $result = self::insertCustormer($formData);
            if($result){
              $messageBox["status"] = "success";
              $messageBox["message"] = "Registeration Successfull";
              header("Refresh:2, url = login.php?");
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
       * @Desc This functoin sets the database instance for the customer
       */

      public static function setDb($dbInstance)
      {
          self::$Db = $dbInstance;
      }

      private static function insertCustormer($data){
        extract($data);
        $sql = "INSERT INTO ".self::$tableName."(`Username`,`Email`,`Password`,`role`) VALUES('$username','$email','$password','".self::$role."')";
        $result = self::$Db->query($sql);
        if($result){
          return true;
          
        }
        return false;
      
      }
    
      
      private static function custormerEmailExist($email){
        $sql = "SELECT `email` FROM ".self::$tableName." WHERE `Email`='$email'";
        $result = self::$Db->query($sql);
        if($result->num_rows > 0){
          return true;
        
        }else{
          return false;
        }
      }

      private static function custormerUsernameExist($username){
        $sql = "SELECT `username` FROM ".self::$tableName." WHERE `Username`='$username'";
        $result = self::$Db->query($sql);
        if($result->num_rows > 0){
          return true;
        }else{
          return false;
        }
      }



      private static function custormerPassword($password){
        $sql = "SELECT `password` FROM ".self::$tableName." WHERE `Password`='$password'";
        $result = self::$Db->query($sql);
        if($result->num_rows > 0){
          return true;
        }else{
          return false;
        }
      }

      
      public static function login($post = []){

        $messageBox = [];
        $formData = [];
        extract($post);


          //  check for username
          if (!empty($username)) {
            if(self::custormerUsernameExist($username) == true){
              $formData["username"] = $username;
            }else{
              $messageBox["username"] = "Username does not exist";         
            }

          }else{
              $messageBox["username"] = "Please enter username";
          }


           //  check for email
          if (!empty($email)) {
            if(self::custormerEmailExist($email) == true){
              $formData["email"] = $email;
            }else{
              $messageBox["email"] = "email does not exist";
            }
          } else {
              $messageBox["email"] = "Please enter email";
          }


          
            //  check for password
          if (!empty($password)) {
              if(self::custormerPassword($password) == true){
                $formData["password"] = $password;
              }else{
                $messageBox["password"] = "password does not exist";

              }
          }else{
            $messageBox["password"] = "Please enter password";
          }


          if(empty($messageBox)){
              $result =  self::custormerEmailExist($email) ;
              $result1 = self::custormerUsernameExist($username);
              $result2 = self::custormerPassword($password);
              if($result && $result1 && $result2){
                $messageBox["status"] = "success";
                $messageBox["message"] = "Login Successfull";
                return $messageBox;

              }else{
                $messageBox["status"] = "error";
                $messageBox["message"] = "Invalid login ";
                return $messageBox;
              }
              

          }else{
              $messageBox["status"] = "error";
              return $messageBox;
            
          }

         
        
      












      }


      


  }
    
      




 