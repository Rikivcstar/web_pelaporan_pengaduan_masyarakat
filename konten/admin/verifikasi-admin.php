<?php

session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}
require '../fungsiindex.php';
$png = query("SELECT * FROM pengaduan  WHERE status = 'proses'");
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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion bg-gradient-primary" id="accordionSidebar" >

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="index.html">
        <div class="sidebar-brand-icon rotate-n-10 mt-4">
          <i class="fas fa-user-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3 mt-3">3<sup>R</sup></div>
      </a>

      <!-- Nav Item - Dashboard -->
      <hr class="sidebar-divider my-0 mt-5">
      <li class="nav-item ">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <p style="color: white; font-size: 12px; font-style: italic; margin-left: 15px; margin-top: 10px;">USERINTERFACE</p>
      <!-- Divider -->

      <!-- verifikasi -->
      <li class="nav-item  active">
        <a class="nav-link" href="verifikasi-admin.php">
          <i class="fas fa-check"></i>
          <span>Verifikasi Pengaduan</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="data-petugas.php">Data Petugas</a>
            <a class="collapse-item" href="data-masyarakat.php">Data Masyarakat</a>
            <a class="collapse-item" href="lihat-laporan.php">Lihat Laporan</a>
            <a class="collapse-item" href="lihat-tanggapan.php">Lihat Tanggapan</a>
          </div>
        </div>
      </li>

      <!-- lsit item laporan -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseone" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-print"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseone" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="cetak-petugas.php" target="_blank">Laporan Petugas</a>
            <a class="collapse-item" href="cetak-masyarakat.php" target="_blank">Laporan Masyarakat</a>
            <a class="collapse-item" href="cetak-pengaduan.php" target="_blank">laporan pengaduan</a>
            <a class="collapse-item" href="cetak-tanggapan.php" target="_blank">Laporan Tanggapan</a>
          </div>
        </div>
      </li>
      <!-- akhir list -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- link logout -->
      <li class="nav-item">
        <a class="nav-link" href="../loguot.php">
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
        <nav class="navbar navbar-expand navbar-light   topbar mb-4 static-top shadow  justify-content-center" style="color: #000 ;">
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
                    <div class="card-header bg-gradient-primary text-white" style="font-size: 19px; font-weight: bold; text-shadow: 1px 1px 1px rgba(0, 0, 0, .8);">Halaman Verifikasi Pengaduan </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table cellpadding="10" cellspacing="0" class="table  table-hover text-center">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nik</th>
                              <th>Tgl_Pengaduan</th>
                              <th>Isi Laporan</th>
                              <th>Foto</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>
                          <?php $i = 1; ?>
                          <?php foreach ($png as $data) : ?>
                            <tbody>
                              <tr>
                                <td><?= $i; ?></td>
                                <td><?= $data["nik"]; ?></td>
                                <td><?= $data["tgl_pengaduan"]; ?></td>
                                <td><?= $data["isi_laporan"]; ?></td>
                                <td><img src="../img/<?= $data["foto"]; ?>" width="40px"></td>
                                <td><?= $data["status"]; ?></td>
                                <td>
                                  <a href="detail-verifikasi.php?id= <?= $data["id_pengaduan"]; ?>" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-info"></i>
                                    </span>
                                    <span class="text">D</span>
                                  </a>
                                  <a href="tanggapan-admin.php?id= <?= $data["id_pengaduan"]; ?>" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                      <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">T</span>
                                  </a>

                                </td>
                              </tr>
                            </tbody>
                            <?php $i++; ?>
                          <?php endforeach; ?>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- Footer -->
        <footer class="sticky-footer" style="height: 40px; margin-top: 140px;">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span style="color: black; font-size: 15px;">Copyright &copy; Masyarakat Damai</span>
            </div>
          </div>
        </footer>

        <!-- javascript -->
        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>


</body>

</html>