<?php
require_once "config/config.php";
require_once "functions/Customer.php";
require_once "config/Db.php";
require_once "functions/Admin.php";
$instance = Database::getDbInstance();
Customer::setDb($instance);



if (!empty($_POST["login"])) {
    $result = Customer::login($_POST);
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap/css/bootstrap.min.css">
    <title>Login</title>

    <?php require_once "includes/home-css.php";  ?>

</head>

<body>
    <?php require_once "includes/home-header.php"; ?>

    <div class="container w-100 ">
        <form class="card d-flex flex-column p-3 w-75 ml-auto mr-auto mt-4 mb-5" method="POST" action="">

            <div style="font-size: 150%;" class="col text-center mb-2">Log in </div> <br>


            
                                <?php if(!empty($result['message'])) { ?>
                                    <p class="text-center <?php if($result["status"] == 'success'){echo 'alert-success';}else{echo 'alert-danger';} ?> p-2"><?=$result["message"]?></p>
                                <?php } ?>


            <label class="font-weight-light mb-1" for="username ">Username</label>
            <input name="username" class="form-control w-100 mb-0 " type="text" placeholder="Enter Username" value="<?php if (!empty($_POST['username'])) {echo $_POST['username'];} ?>">
            
            <?php if (!empty($result["username"])) { ?>
                <small id="usernameHelp" class=" text-danger form-text "><?= $result['username'] ?></small>
            <?php } ?>

            <label class="font-weight-light mb-1 mt-3" for="Email">Email</label>
            <input name="email" class="form-control w-100 my-input " type="email" placeholder="Enter Email" value="<?php if (!empty($_POST['email'])){echo $_POST['email'];} ?>">

            <?php if (!empty($result["email"])) { ?>
                <small id="usernameHelp" class=" text-danger form-text "><?= $result['email'] ?></small>
            <?php } ?>


            <label class="font-weight-light mb-1 mt-3" for="password">Password</label> 
                        <input name="password" class="form-control w-100 my-input " type="password" placeholder="Enter Password" value="<?php if (!empty($_POST['password'])){echo $_POST['password'];} ?>">

                        <?php if(!empty($result["password"])){ ?>
                                        <small id="usernameHelp" class=" text-danger form-text "><?=$result['password']?></small>
                                    <?php } ?>

            <input name="login" style="font-size: 100%;" class="btn-dark w-20 ml-auto mr-auto mt-4 form-control" type="submit" value="Log in">

            <p style="font-size: small;" class="font-weight-light mt-2">Not registered? <a class="btn-link" href="register.php">Register</a></p>


        </form>
    </div>








    <?php require_once "includes/home-footer.php"; ?>
</body>

</html>