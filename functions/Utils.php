<?php

class Utils 
{
  

  /**
   * @Desc This functions helps us upload a file
   * @param Array
   * @return Array
   */
  public static function uploadFile($file): array
  {
    extract($file);
    
    $nameArray = explode('.',$name);
    $imageExternsion = end($nameArray);
    $newImageName = uniqid().rand(0,10000).'.'.$imageExternsion;
    $imageUrl = IMAGE_PATH."posts/$newImageName";
    $result = move_uploaded_file($tmp_name,__DIR__."/../assets/images/posts/$newImageName");
    if($result){
      return ['status'=>'success','url'=>$imageUrl];
    }
    return ['status'=>'error'];
  }


  public static function see($data){
    echo "<pre>";
    print_r($data);
    die();
  }


}
