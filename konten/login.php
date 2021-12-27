<?php
session_start();
if (isset($_SESSION["nik"])) {
  header("Location:masyarakat.php");
  exit;
}

require 'fungsiindex.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  // $level = $_POST["level"];
  // cek username ada atau tidak
  $result = mysqli_query($con, "SELECT * FROM masyarakat WHERE username ='$username' ");
  if (mysqli_num_rows($result) === 1) {
    //  cek passwordnya 
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION["nama"] = $row["nama"];
      $_SESSION["nik"] = $row["nik"];
      header("Location:masyarakat.php");
      exit;
    }
  } else {
    $pesan = true;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Login Pembayaran Spp</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container mt-5">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-5" style="font-weight: 700; font-size: 30px; text-shadow: 0px 0px 1px rgba(0,0,0.8);">LOGIN <br> MASYARAKAT</h1>
                  </div>
                  <form class="user" action="" method="post">
                    <?php if (isset($pesan)) : ?>
                      <p class="alert alert-danger" style="font-style: italic; color: red;">Username Atau Password Salah!</p>
                    <?php endif; ?>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your UserName">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter your Password">
                    </div>

                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>

                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="login2.php">LOGIN UNTUK ADMIN & PETUGAS</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">SUDAH BUAT AKUN?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="index.php">KEMBALI KE INDEX</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


</body>

</html>