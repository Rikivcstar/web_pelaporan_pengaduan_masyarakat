<?php

session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}
require '../fungsiindex.php';

if (isset($_POST["regis"])) {

  if (regis_petugas($_POST) > 0) {

    echo "<script>
                alert('Akun Baru Berhasil Ditambahkan');
                document.location.href ='admin.php';
          </script>";
  } else {
    mysqli_error($con);
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
  <link href="../fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container " style="margin-top: 30px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900  " style="font-weight: 700; font-size: 30px; text-shadow: 1px 1px 1px rgba(0,0,0.6); margin-top: -25px;">Tambah Data<br>Petugas</h1>
                  </div>
                  <hr>
                  <form class="user" action="" method="post">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-user" style="width: 20px;"></i></div>
                        </div>
                        <input type="text" name="nama_petugas" class="form-control form-control-user" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukan Nama Lenkap" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-users" style="width: 20px;"></i></div>
                        </div>
                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Username Anda" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-unlock" style="width: 20px;"></i></div>
                        </div>
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password Anda" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-unlock" style="width: 20px;"></i></div>
                        </div>
                        <input type="password" name="password2" class="form-control form-control-user" id="exampleInputPassword2" placeholder="Masukan Ulang Password Anda" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text"><i class="fas fa-phone-alt" style="width: 20px;"></i></div>
                        </div>
                        <input type="telp" name="telp" class="form-control form-control-user" id="exampleInputtelp" placeholder="Masukan No.Telp Anda" required autocomplete="off">
                      </div>
                    </div>
                    <div class="form-group">
                    <select name="status" id="" class="form-control">
                    <option value="admin">admin</option>
                    <option value="petugas">petugas</option>
                    </select>
                    </div>
                    <button type="submit" name="regis" class="btn btn-primary btn-user btn-block">Buat Akun</button>

                    </a>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>