<?php

require_once "../config/config.php";
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
						<h1 class="mt-4">View Customers</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
                                 
                        <!-- SEARCH -->
                        <section id="search" class="py-4">
                            <div class="container">
                            <div class="row">
                                <div class="col-md-6 ml-auto">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Users...">
                                    <div class="input-group-append">
                                    <button class="btn background-light">Search</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </section>

                        <!-- USERS -->
                        <section id="users">
                            <div class="container">
                            <div class="row">
                                <div class="col">
                                <div class="card">
                                    <div class="card-header text-center">
                                    <h4>Current Users</h4>
                                    </div>
                                    <table class="table table-striped">
                                    <thead class="background-dark">
                                        <tr>
                                        <th>id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>CreatedAt</th>
                                        <th>UpdatedAt</th>
                                        <th>Edit user</th>
                                        <th>Delete user</th>
                                        </tr>
                                    </thead>
                                    <tbody id="userTable">
                                        <tr>
                                        <td>1</td>
                                        <td>John Doe</td>
                                        <td>john.doe@example.com</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>
                                            <div>
                                                <a href="edit-customer.php" type="button" class="btn btn-primary">
                                                    <i class="fas fa-trash"></i> Edit user
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                
                                                <a href="index.html" class="btn btn-danger btn-block">
                                                    <i class="fas fa-trash"></i> Delete user
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Harry White</td>
                                        <td>harry@email.com</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>
                                            <div>
                                                
                                            <a href="edit-customer.php" type="button" class="btn btn-primary">
                                                    <i class="fas fa-trash"></i> Edit user
                                                </a>
                                              </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="index.html" class="btn btn-danger btn-block">
                                                        <i class="fas fa-trash"></i> Delete user
                                                </a>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <td>3</td>
                                        <td>Mary Johnson</td>
                                        <td>mary@website.com</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>2021-05-05 15:39:21</td>
                                        <td>
                                            <div>

                                            <a href="edit-customer.php" type="button" class="btn btn-primary">
                                                  <i class="fas fa-trash"></i> Edit user
                                                </a>
                                              </div>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="index.html" class="btn btn-danger btn-block">
                                                  <i class="fas fa-trash"></i> Delete user
                                                </a>
                                              </div>
                                        </td>
                                        </tr>
                                    </tbody>
                                    </table>
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
