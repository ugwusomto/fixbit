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
						<h1 class="mt-4">Dashboard</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
						<div class="row">
							<div class="col-xl-3 col-md-6">
								<div class="card bg-primary text-white mb-4">
									<div class="card-body">Primary Card</div>
									<div
										class="card-footer d-flex align-items-center justify-content-between"
									>
										<a class="small text-white stretched-link" href="#"
											>View Details</a
										>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-warning text-white mb-4">
									<div class="card-body">Warning Card</div>
									<div
										class="card-footer d-flex align-items-center justify-content-between"
									>
										<a class="small text-white stretched-link" href="#"
											>View Details</a
										>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-success text-white mb-4">
									<div class="card-body">Success Card</div>
									<div
										class="card-footer d-flex align-items-center justify-content-between"
									>
										<a class="small text-white stretched-link" href="#"
											>View Details</a
										>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="card bg-danger text-white mb-4">
									<div class="card-body">Danger Card</div>
									<div
										class="card-footer d-flex align-items-center justify-content-between"
									>
										<a class="small text-white stretched-link" href="#"
											>View Details</a
										>
										<div class="small text-white">
											<i class="fas fa-angle-right"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="card mb-4">
							<div class="card-header">
								<i class="fas fa-table mr-1"></i>
								DataTable Example
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table
										class="table table-bordered"
										id="dataTable"
										width="100%"
										cellspacing="0"
									>
										<thead>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</thead>

										<tbody>
											<tr>
												<td>Tiger Nixon</td>
												<td>System Architect</td>
												<td>Edinburgh</td>
												<td>61</td>
												<td>2011/04/25</td>
												<td>$320,800</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</main>
				<footer class="py-4 bg-light mt-auto">
					<div class="container-fluid">
						<div
							class="d-flex align-items-center justify-content-between small"
						>
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
