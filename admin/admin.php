<?php
 require_once "../config/config.php";
 require_once "../config/Db.php";
 require_once "../functions/Admin.php";
 $instance = Database::getDbInstance();
 Admin::setDb($instance);

//  process the form registertion
 if(!empty($_POST["registerAdmin"])){
  $result = Admin::registerAdmin($_POST);
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
                        <h1 class="mt-4">View Admins</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="col-md-12 p-5">
                            <h1 class="text-center">Add Admin</h1>
                            <form class="p-5 card" method="POST">

                               

                                <?php if(!empty($result['message'])) { ?>
                                    <p class="text-center <?php if($result["status"] == 'success'){echo 'alert-success';}else{echo 'alert-danger';} ?> p-2"><?=$result["message"]?></p>
                                <?php } ?>


                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input name="username" type="text" class="form-control" id="username"
                                        aria-describedby="emailHelp" placeholder="Enter username" value="<?php if(!empty($_POST['username'])){ echo $_POST['username'];}?>">
                                        <?php if(!empty($result["username"])){ ?>
                                        <small id="usernameHelp" class=" text-danger form-text "><?=$result['username']?></small>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input name="email" type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" placeholder="Enter email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];}?>">
                                    <?php if(!empty($result["email"])){ ?>
                                        <small id="emailHelp" class=" text-danger form-text "><?=$result['email']?></small>
                                    <?php } ?>

                                    
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Password">
                                        <?php if(!empty($result["password"])){ ?>
                                        <small id="passwordHelp" class=" text-danger form-text "><?=$result['password']?></small>
                                    <?php } ?>
                                </div>
                                <button value="register" name="registerAdmin" type="submit" class="btn w-25 btn-primary">Submit</button>
                            </form>

                        </div>


                    </div>


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
                                                            <th>Edit admin</th>
                                                            <th>Delete admin</th>
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
                                                                    <a href="edit-admin.php" type="button"
                                                                        class="btn btn-primary">
                                                                        <i class="fas fa-trash"></i> Edit admin
                                                                    </a>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div>

                                                                    <a href="index.html"
                                                                        class="btn btn-danger btn-block">
                                                                        <i class="fas fa-trash"></i> Delete admin
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





                    <?php require_once "includes/footer.php"; ?>

            </div>
            </main>

        </div>
        </div>
        <?php require_once "includes/scripts.php"; ?>


    </body>

</html>