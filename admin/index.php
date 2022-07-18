<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'partials/db_connect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM `admin` WHERE Username='$username' And Password='$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1) {
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: home-slider.php");
  } else {
    $showError = "Username and password are incorrect";
  }
}
session_abort();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./../img/favicon.png" type="image/png" sizes="16x16">
    <title>Jk-Tiles</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
</head>

<body>

<section class="vh-100" style="background: url('../img/login-bg.jpg');">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="../img/service/service-1.jpg" alt="login form" class="img-fluid w-100" style="border-radius: 1rem 0 0 1rem;    width: 100%;
    height: 500px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="index.php" method="POST">
                  <?php
                  if ($login) {

                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hurry !!!!</strong> Login Successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
                  }

                  if ($showError) {

                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
                  }
                  ?>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="../img/jk-logo.jpg" alt="" class="w-50">
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" name="username" id="username" class="form-control form-control-lg" placeholder="Enter email">
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex justify-content-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo mb-2 text-center">
                  <img src="../img/jk-logo.jpg" class="bg-logo p-2 w-50">
                </div>
                <h4 style="font-family: cursive;" class="text-center">Hello! let's get started</h4>
                <h6 class="font-weight-regular text-center" style="font-family: System-UI;">Log in to continue.</h6>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="text-white">Email address</label>
                        <input type="email" name="username" id="username" class="form-control form-control-lg"placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="text-white">Password</label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-login text-white col-md-12">Login</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

<?php include 'include/js-url.php'; ?>