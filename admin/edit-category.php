<?php 
require_once "../config/config.php";

if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
}



require_once "../config/Db.php";
require_once "../functions/Category.php";



if(empty($_GET['id'])){
	$url = APP_PATH."404.php";
	header("Location: $url");
	exit();
}

$category_id = $_GET['id'];
$instance = Database::getDbInstance();
Category::setDb($instance);
$cat = Category::getCategoryById($category_id);
// var_dump($cat['name']);
// die();

if(empty($cat)){ 
	$url = APP_PATH."404.php";
	header("Location: $url");
	exit();
}


if(isset($_POST['updateCategory'])){
    $newCat = $_POST['category'];
   $result = 	Category::UpdateCategoryById($category_id, $newCat);
	 if($result['status']== "success"){
		$url = APP_PATH."admin/view-category.php";
		header("Refresh:4; url=$url");
	 }
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
						<h1 class="mt-4">Edit Category</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
						<section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Category</h4>
            </div>
            <div class="card-body">
            <form action="" method="POST">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control"  placeholder="category name" name="category" value="<?php if(isset($cat['name'])){
                              echo $cat['name'];
                            }?>">
                        </div>
                        <div class="form-group">
                          <button type="submit" name="updateCategory" class="form-control btn btn-primary submit px-3">Add Category</button>
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
