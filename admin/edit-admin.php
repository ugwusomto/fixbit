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
						<h1 class="mt-4">Edit Admins</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>

						<div class="col-md-12 p-5">
							<h1 class="text-center">Edit Admin</h1>
							<form class="p-5 card">

							<div class="form-group">
									<label for="exampleInputEmail1">Username</label>
									<input type="email" class="form-control" id="exampleInputEmail1"
										aria-describedby="emailHelp" placeholder="Akaluka">
								</div>

								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1"
										aria-describedby="emailHelp" placeholder="akaluka@gmail.com">
									<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with
										anyone else.</small> -->
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1"
										placeholder="Password">
								</div>
								<button type="submit" class="btn w-25 btn-primary">Submit</button>
							</form>

						</div>


					</div>







					<?php require_once "includes/footer.php"; ?>

			</div>
			</main>

		</div>
		</div>
		<?php require_once "includes/scripts.php"; ?>


	</body>

</html>