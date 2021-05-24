<?php 
require_once "../config/config.php";

if(empty($_SESSION['admin_id'])){
	$path = APP_PATH.'admin/login.php';
	header("Location: $path");
	exit();
}


require_once "../config/Db.php";
require_once "../functions/Admin.php";



if(empty($_GET['id'])){
	$url = APP_PATH."404.php";
	header("Location: $url");
	exit();
}

$admin_id = $_GET['id'];
$instance = Database::getDbInstance();
Admin::setDb($instance);
$admin = Admin::getAdminById($admin_id);

if(empty($admin)){ 
	$url = APP_PATH."404.php";
	header("Location: $url");
	exit();
}


if(!empty($_POST['updateAdmin'])){
   $result = 	Admin::updateAdminById($_POST);
	 if($result['status']== "success"){
		$url = APP_PATH."admin/admin.php";
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
						<h1 class="mt-4">Edit Admins</h1>
						<ol class="breadcrumb mb-4">
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>

						<div class="col-md-12 p-5">
							<h1 class="text-center">Edit Admin</h1>
							<form  method="POST" action="<?=$_SERVER['PHP_SELF']?>?id=<?=$admin_id?>" class="p-5 card">

							<?php if(!empty($result['message'])) { ?>
                                    <p class="text-center <?php if($result["status"] == 'success'){echo 'alert-success';}else{echo 'alert-danger';} ?> p-2"><?=$result["message"]?></p>
                                <?php } ?>


                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control" id="username"
                                        aria-describedby="emailHelp" placeholder="Enter username" value="<?php if(!empty($_POST['username'])){ echo $_POST['username'];}else{ echo $admin->username; }?>">
                                        <?php if(!empty($result["username"])){ ?>
                                        <small id="usernameHelp" class=" text-danger form-text "><?=$result['username']?></small>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}else{ echo $admin->email; }?>">
                                    <?php if(!empty($result["email"])){ ?>
                                        <small id="emailHelp" class=" text-danger form-text "><?=$result['email']?></small>
                                    <?php } ?>

                                    
                                </div>

																<input type="hidden" name="id" value="<?=$admin_id?>">



                                <div class="form-group">
                                    <label for="password">Password (optional)</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                        <?php if(!empty($result["password"])){ ?>
                                        <small id="passwordHelp" class=" text-danger form-text "><?=$result['password']?></small>
                                    <?php } ?>
                                </div>
                                <button value="update" name="updateAdmin" type="submit" class="btn w-25 btn-primary">Submit</button>
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