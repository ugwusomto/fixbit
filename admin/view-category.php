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
 $Cat = Category::getAllCategory();
// var_dump($Cat);
// die();
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
					<h1 class="mt-4">View Category</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>

					<!-- USERS -->
					<section id="users">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header text-center">
											<h4>All Categories</h4>
										</div>
										<table class="table table-striped">
											<thead class="background-dark">
												<tr>
													<th>id</th>
													<th>Category Name</th>
													<th>UpdatedAt</th>
													<th>Action</th>

												</tr>
											</thead>
											<tbody id="userTable">

												<?php foreach ($Cat as $key => $value) {   ?>

													<tr id="row<?= $value->id ?>">
														<td><?= $key ?></td>
														<td><?= $value->name ?></td>
														<td><?= date("d M,Y", strtotime($value->created_at)) ?></td>
														<td>
															<div>
																<a title="edit record" href="edit-category.php?id=<?= $value->id ?>" type="button" class="">
																	<i class="fas fa-edit">Edit</i>
																</a>
																<a data-name="Category" data-id="<?= $value->id ?>" title="delete record" href="<?= APP_PATH ?>functions/api-request.php" class="text-danger delete_category">
																	<i class="fas fa-trash">Delete</i>
																</a>
															</div>
														</td>

													</tr>

												<?php   } ?>


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