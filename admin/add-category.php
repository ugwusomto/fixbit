<?php
require_once "../config/config.php";

if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
}



require_once "../config/Db.php";
require_once "../functions/Category.php";
$instance = Database::getDbInstance();
Category::setDb($instance);
//  $Customers = Customer::getAllCustomers();
//  process the form registertion
if (isset($_POST["addCategory"])) {
  //  echo $_POST['registerCustomers'];
  //    var_dump($_POST) ;
  //    die();
  $result = Category::addCategory($_POST);

  // var_dump($result);
  // die();
}
?>
<?php require_once "../config/config.php"; ?>
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
                  <h1>Add Category</h1>
                </div>
              </div>
            </div>
          </header>

          <!-- ACTIONS -->
          <section id="actions" class="py-4 mb-4 bg-light">
            <div class="container">
              <div class="row">
                <div class="col-md-3">

                </div>
              </div>
            </div>
          </section>

          <!-- DETAILS -->
          <section id="details">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-header">
                      <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST">
                        <?php if (!empty($result['message'])) { ?>
                          <p class="text-center <?php if ($result["status"] == 'success') {
                                                  echo 'alert-success';
                                                } else {
                                                  echo 'alert-danger';
                                                } ?> p-2"><?= $result["message"] ?></p>
                        <?php } ?>
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" value="" placeholder="category name" name="category">
                        </div>
                        <div class="form-group">
                          <button type="submit" name="addCategory" class="form-control btn btn-primary submit px-3">Add Category</button>
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