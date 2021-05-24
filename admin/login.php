<?php
 require_once "../config/config.php";

 if(!empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/index.php';
	header("Location: $path");
	exit();
}

 require_once "../config/Db.php";
 require_once "../functions/Admin.php";
 $instance = Database::getDbInstance();
 Admin::setDb($instance);

//  process the form registertion
 if(!empty($_POST["loginAdmin"])){
  $result = Admin::loginAdmin($_POST);
  if(!empty($result['status']) && $result['status'] == 'success'){
      $path = APP_PATH.'admin/index.php';
      header("Refresh: 3; url=$path");
  }
 }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Login</title>
    <?php require_once "includes/admin-css.php"; ?>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="<?=$_SERVER['PHP_SELF']?>">

                                        <?php if(!empty($result['message'])) { ?>
                                    <p class="text-center <?php if($result["status"] == 'success'){echo 'alert-success';}else{echo 'alert-danger';} ?> p-2"><?=$result["message"]?></p>
                                <?php } ?>

                                            <div class="form-group">
                                                <label class="small mb-1" for="email">Email</label>
                                                <input class="form-control py-4" name="email" id="email" type="email" placeholder="Enter email address" />
                                                <?php if(!empty($result["email"])){ ?>
                                        <small id="emailHelp" class=" text-danger form-text "><?=$result['email']?></small>
                                    <?php } ?>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                            <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                                            <?php if(!empty($result["password"])){ ?>
                                        <small id="passwordHelp" class=" text-danger form-text "><?=$result['password']?></small>
                                    <?php } ?>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" name="rem" id="rem" type="checkbox" />
                                                    <label class="custom-control-label" for="rem">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                             
                                                <button type="submit" name="loginAdmin" value="login" class="btn btn-primary" >Login</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php require_once "includes/scripts.php"; ?>
    </body>
</html>
