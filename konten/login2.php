<?php
session_start();
if(isset($_SESSION["status"])){
    header("Location:admin/admin.php");
    exit;
}
require 'fungsiindex.php';

if (isset($_POST["login"])) {

    $username = mysqli_escape_string($con,$_POST["username"]);
    $password = mysqli_escape_string($con, $_POST["password"]);
    $level =  mysqli_escape_string($con,$_POST["status"]);

    // cek username ada atau tidak
    $result = mysqli_query($con, "SELECT * FROM petugas WHERE username ='$username' and status ='$level' ");
    if (mysqli_num_rows($result) === 1) {
        //  cek passwordnya 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["id_petugas"] = $row["id_petugas"];
            $_SESSION["nama_petugas"] = $row["nama_petugas"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["status"] = $row["status"];
            // uji level 
            if($level == "petugas"){
                header("Location:petugas/petugas.php");
                exit;
            }elseif ($level == "admin") {
                header("Location:admin/admin.php");
                exit;
            }
        }
    }else {
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

<body style="background-image:linear-gradient(100deg,#014455,#016982,#059DC2);">

    <div class="container mt-5">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9 ">

                <div class="card o-hidden border-0 shadow-lg  ">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
         <div class="row">
             <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-12">
                     <div class="p-5">
                        <div class="text-center">
                         <h1 class="h4 text-gray-900 mb-5" style="font-weight: 700; font-size: 30px; text-shadow: 0px 0px 1px rgba(0,0,0.8);">LOGIN <br> ADMIN & PETUGAS</h1>
                           </div>

                          <form class="user" action="" method="post">
                              <?php if(isset($pesan)) : ?>
                                <p style="color: red; font-style: italic;" class="alert alert-danger">Username atau password Yang anda masukan salah</p>
                             <?php endif; ?>
                            <div class="form-group">
                            <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter your UserName">
                            </div>
                            <div class="form-group">
                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter your Password">
                            </div>
                            <div class="form-group">
                            <select name="status" id="status" class="form-control">
                            <option value="petugas">Petugas</option>
                            <option value="admin">Admin</option>
                            </select>
                            </div>

                            <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="index.php">Kembali ke halaman index</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Login untuk Masyarakat</a>
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