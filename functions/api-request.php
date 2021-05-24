<?php 

require_once "../config/config.php";
 require_once "../config/Db.php";
 require_once "Admin.php";
 require_once "Category.php";

//process delete for admin
if(!empty($_POST['deleteAdmin'])){
  extract($_POST);
  $instance = Database::getDbInstance();
  Admin::setDb($instance);
  Admin::deleteAdminById($id,$role);

}

if(isset($_POST['deleteCategory'])){
  extract($_POST);
  $instance = Database::getDbInstance();
  Category::setDb($instance);
  Category::deleteCategoryId($id);

}