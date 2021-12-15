<?php
session_start();
if (!isset($_SESSION["nik"])) {
  header("Location:index.php");
  exit;
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center  " href="index.html">
        <div class="sidebar-brand-icon rotate-n-10 mt-4">
          <i class="fas fa-user-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3 mt-3">3<sup>R</sup></div>
      </a>

      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active mt-5">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <hr class="sidebar-divider d-none d-md-block">
      <p style="color: white; font-size: 12px; font-style: italic; margin-left: 15px; margin-top: 10px;">USERINTERFACE</p>
     
      <!-- link masyarakat -->
      <li class="nav-item ">
        <a class="nav-link" href="isi_pengaduan.php">
          <i class="fas fa-pencil-alt"></i>
          <span>Tulis Pengaduan</span></a>
      </li>

      <!-- link masyarakat -->
      <li class="nav-item ">
        <a class="nav-link" href="lihat-pengaduan.php">
          <i class="fas fa-eye"></i>
          <span>Lihat Tanggapan</span></a>
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
      <!-- Sidebar  (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark   topbar mb-4 static-top shadow  justify-content-center" style="color: #000 ;">
          <h2 style="font-family: 'Recursive', sans-serif; font-weight: 500;  font-size: 26px;color: black;">Aplikasi Pelaporan Pengaduan Masyarakat</h2>
        </nav>
        <!--  Page Content -->
        <div class="container-fluid">

          <!-- Content DATA -->
          <div class="row">
            <div class="col-md-12">
              <hr style="border: 2px solid black;">
              <marquee>
                <p class="mt-3" style="color: black; font-size: 25px; font-weight: 500;" class="text-center">Selamat Datang Di Halaman
                  Masyarakat Di Web Pengaduan Ini Kami Akan Memberi Pengaduan Untuk Kalian.
              </marquee>
              <hr style="border: 2px solid black;">
              </p><br>
              <p style="font-size: 25px; color: black; font-family: 'Recursive', sans-serif; font-weight: bold; color:black;"> Kamu Login Sebagai Masyarakat, Your Name: </p>
              <p style="font-size: 25px; font-family: 'Recursive', sans-serif; font-weight: 700; color:black; text-shadow: 1px 1px 1px rgba(0, 0, 0, .3);">"<?php echo $_SESSION["nama"]; ?>"</p>
            </div>

          </div>
          <!-- Footer -->
          <footer class="sticky-footer" style="height: 40px; margin-top: 210px;">
            <div class="container my-auto">
              <div class="copyright text-center my-auto">
                <span style="color: black; font-size: 15px;">Copyright &copy; Masyarakat Damai</span>
              </div>
            </div>
          </footer>

</body>

</html>