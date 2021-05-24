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
    // self::see($file);
    $result = move_uploaded_file($tmp_name,__DIR__."/../assets/images/posts/$name");
    self::see($result);
    return [];
  }


  public static function see($data){
    echo "<pre>";
    print_r($data);
    die();
  }


}
