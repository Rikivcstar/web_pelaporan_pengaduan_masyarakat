<?php
session_start();
if (!isset($_SESSION["nik"])) {
  header("Location:index.php");
  exit;
}
require 'fungsiindex.php';

if (isset($_POST["kirim"])) {

  if (isi_laporan($_POST) > 0) {
    echo "<script>
                  alert('Pengaduan Berhasil Dikirim');
                  document.location.href='masyarakat.php';
              </script>";
  } else {
    echo "<script>
                  alert('Pengaduan gagal Dikirim');
                  document.location.href='masyarakat.php';
              </script>";
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

  <title>Spp Dashboard_Admin</title>
  <!-- my Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-success" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
        <div class="sidebar-brand-icon rotate-n-10 mt-4">
          <i class="fas fa-user-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3 mt-3">3<sup>R</sup></div>
      </a>
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item  mt-5">
        <a class="nav-link" href="masyarakat.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">
      <p style="color: white; font-size: 12px; font-style: italic; margin-left: 15px; margin-top: 10px;">USERINTERFACE</p>
      <!-- link masyarakat -->
      <li class="nav-item  active">
        <a class="nav-link" href="#">
          <i class="fas fa-pencil-alt"></i>
          <span>Tulis Pengaduan</span></a>
      </li>

      <!-- link masyarakat -->
      <li class="nav-item  ">
        <a class="nav-link" href="lihat-pengaduan.php">
          <i class="fas fa-eye"></i>
          <span>lihat Pengaduan</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- link logout -->
      <li class="nav-item">
        <a class="nav-link" href="loguot.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar   -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light  topbar mb-4 static-top shadow  justify-content-center" style="color: #000 ;">
          <h2 style="font-family: 'Recursive', sans-serif; font-weight: 500;  font-size: 26px;color: black;">Aplikasi Pelaporan Pengaduan Masyarakat</h2>

        </nav>
        <!--  Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- Content DATA -->

            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header bg-gradient-success text-white" style="font-size: 19px; font-weight: bold; text-shadow: 1px 1px 1px rgba(0, 0, 0, .8);">Halaman Isi Pengaduan </div>
                    <div class="card-body">
                      <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="nik" class="mt-3"> Nik :</label>
                          <input type="text" name="nik" class="form-control" value="<?php echo $_SESSION["nik"];
                                                                                    ?>" id="nik" readonly>
                          <label for="tgl" class="mt-3"> Tgl_Pengaduan :</label>
                          <input type="date" name="tgl_pengaduan" class="form-control" value="<?php echo date("Y-m-d");  ?>" id="tgl" readonly>
                          <label for="isi" class="mt-3"> Isi Laporan :</label>
                          <textarea name="isi_laporan" id="isi" style="height: 100px;" class="form-control"></textarea>
                          <label for="" class="mt-3">Upload foto :</label>
                          <input type="file" name="foto" class="form-control " value="" style="height: 44px;"><br>
                          <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Footer -->
        <footer class="sticky-footer" style="height: 40px;">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span style="color: black; font-size: 15px;">Copyright &copy; Masyarakat Damai</span>
            </div>
          </div>
        </footer>

</body>

</html>