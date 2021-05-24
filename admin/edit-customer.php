<?php require_once "../config/config.php";
if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
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
						<h1 class="mt-4">Edit Customer</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
						<section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Customer</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="title">username</label>
                  <input type="text" class="form-control" value="eddy">
                </div>
				<div class="form-group">
				<label for="title">Email</label>
                  <input type="text" class="form-control" value="eddy@gmail.com">
                </div>
				<div class="form-group">
				<label for="title">password</label>
                  <input type="text" class="form-control" value="eddy1234">
                </div>
				<div class="form-group">
				<label for="title">Role</label>
                  <input type="text" class="form-control" value="1">
                </div>
     
              </form>
            </div>
          </div>
        </div>
      </div>
	  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index.html" class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Save Changes
          </a>
        </div>
      </div>
    </div>
  </section>
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
