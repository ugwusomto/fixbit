<?php 

require_once "../config/config.php";
 require_once "../config/Db.php";
 require_once "Admin.php";
 require_once "Category.php";
 require_once "Comment.php";


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


if(!empty($_POST['add_comment'])){
  $instance = Database::getDbInstance();
  Comment::setDb($instance);
  $result = Comment::AddComment($_POST);
  if($result){
    echo json_encode(['status'=>'success','message'=>'comments successfully added']);
  }else{
    echo json_encode(['status'=>'error','message'=>'comments failed']);

  }
}