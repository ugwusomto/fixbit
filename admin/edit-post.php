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
						<h1 class="mt-4">Edit Post</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
                                           <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Edit Post</h1>
        </div>
      </div>
    </div>
  </header>

  <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index.html" class="btn btn-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn btn-success btn-block">
            <i class="fas fa-check"></i> Save Changes
          </a>
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
              <h4>Edit Post</h4>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" value="Post One">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <select class="form-control">
                    <option selected>Web Development</option>
                    <option>Tech Gadgets</option>
                    <option>Business</option>
                    <option>Health & Wellness</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">Upload Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image">
                    <label for="image" class="custom-file-label">Choose File</label>
                    <small class="form-text text-muted">Max Size 3Mb</small>
                  </div>
                  <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="editor1"
                      class="form-control">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur accusamus maiores dolorum magni eveniet inventore? Inventore, provident odit. Facilis quas quidem sed ut dolor iusto soluta officia non quibusdam numquam magnam est sapiente quam accusamus dolore blanditiis debitis cupiditate optio error, molestias enim illo suscipit? Alias optio id modi quas.</textarea>
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
