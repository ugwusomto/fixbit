<?php 

require_once "../config/config.php";
 require_once "../config/Db.php";
 require_once "Admin.php";

//process delete for admin
if(!empty($_POST['deleteAdmin'])){
  extract($_POST);
  $instance = Database::getDbInstance();
  Admin::setDb($instance);
  Admin::deleteAdminById($id,$role);

}