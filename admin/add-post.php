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
                  <h1>Add Post</h1>
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
                    <i class="fas fa-check"></i> publish post
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
                      <h4>Add Post</h4>
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
                            <textarea name="editor1" class="form-control"></textarea>
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