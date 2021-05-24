<?php

require_once "../config/config.php"; 
if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
}




require_once "../config/Db.php";
require_once "../functions/Post.php";
require_once "../functions/Category.php";
require_once "../functions/Utils.php";


$instance = Database::getDbInstance();
Post::setDb($instance);
Category::setDb($instance);

$allCategory = Category::getAllCategory();


//  process the post upload
if(!empty($_POST["uploadPost"])){
  echo "<pre>";
  print_r($_POST);
  $result = Utils::uploadFile($_FILES['image']);
  die();
 $result = Post::AddPost($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php require_once "includes/admin-css.php"; ?>
</head>

<body class="sb-nav-fixed">
  <?php require_once "includes/top-nav.php"; ?>

  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <?php require_once "includes/sidenav.php"; ?>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">

          <!-- HEADER -->
          <header id="main-header" class="py-2 bg-primary text-white mt-4">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <h1>Add Post</h1>
                </div>
              </div>
            </div>
          </header>

          <!-- ACTIONS -->


          <!-- DETAILS -->
          <section id="details">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <h4>Add Post</h4>
                    </div>
                    <div class="card-body">
                      <form method="post" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input required name="title" type="text" class="form-control" value="Post One">
                        </div>
                        <div class="form-group">
                          <label for="category">Category</label>
                          <select name="category_id" required class="form-control">
                            <option value="" selected>Select Category</option>
                            <?php foreach ($allCategory as $key => $value) { ?>
                            <option value="<?=$value->id?>"><?=$value->name?></option>
                            <?php } ?>

                          </select>
                        </div>
                        <div class="form-group">
                          <label for="image">Upload Image</label>
                          <div class="custom-file">
                            <input accept="image/*" required name="image" type="file" class="custom-file-input" id="image">
                            <label for="image" class="custom-file-label">Choose File</label>
                            <small class="form-text text-muted">Max Size 3Mb</small>
                          </div>
                          <div class="form-group">
                            <label for="body">Body</label>
                            <textarea required name="content" class="form-control"></textarea>
                          </div>


                          <div class="row">
                <div class="col-md-3">
                  <button name="uploadPost" value="upload" type="submit" class="btn btn-success btn-block">
                    <i class="fas fa-check"></i> publish post
                  </button>
                </div>

                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <?php require_once "includes/footer.php"; ?>

        </div>
      </main>

    </div>
  </div>
  <?php require_once "includes/scripts.php"; ?>


</body>

</html>