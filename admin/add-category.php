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
                  <a href="index.html" class="btn btn-success btn-block">
                    <i class="fas fa-check"></i> publish 
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
                      <h4>Add Category</h4>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" value="add category">
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
