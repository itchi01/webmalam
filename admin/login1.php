<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/iconfonts/puse-icons-feather/feather.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <nav class="navbar navbar-dark" style="background-color: #142266;">
    <a class="navbar-brand" href="#">
      <img src="/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inlane-block align-top" alt="" loading="lazy">
      WEB PENJUALAN BLK BANDA ACEH
    </a>
  </nav>
  <div class="container my-5">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="border border-info px-4 py-4 col-md-4" style="background-color: rgba(0, 0, 0, 0.6);">
        <form action="" method="POST">
          <div class="form-group">
            <label for="email"><b>Email Address</b></label>
            <input type="email" autofocus autocomplete="true" required class="form-control" id="email" aria-describedby="emailHelp" name="username">
          </div>
          <div class="form-group">
            <label for="pass"><b>Password</b></label>
            <input type="password" placeholder="*******" class="form-control" id="pass" name="password">
          </div>
          <button type="submit" class="btn btn-outline-primary" name="login">Submit</button>
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <?php
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($email == 'admin@admin.com' && $pass = '1234') {
      echo "<script>alert('Selamat Datang Admin')
        window.location.href='../admin';
     </script>";
    } else {
      echo "<script>alert('Login Gagal')</script>";
    }
  }
  ?>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <script src="js/bootstrap.js"></script>
</body>

</html>