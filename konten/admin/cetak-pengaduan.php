<?php
session_start();
if (!isset($_SESSION["status"])) {
    header("Location:../login2.php");
    exit;
}
require '../fungsiindex.php';
$png = query("SELECT * FROM pengaduan ");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- my Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Recursive&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="pag-top">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body text-center">
                    <h3 class="m-0 font-weight-bold text-info"> PEMERINTAHAN KABUPATEN BOGOR</h3>
                    <h4 class="m-0 font-weight-bold text-info"> DESA BOJJONGGEDE KAB.BOGOR</h4>
                    <h6 class="m-0 font-weight-bold text-info"> Jalan Desa Bojjonggede kode Pos 16922</h6>
                    <br><br>
                    <hr>
                    <h6 class="m-0 font-weight-bold text-info"> Laporan Data pengaduan</h6>
                    <br>
                    <div class="table-responsive">
                       <table cellpadding="10" cellspacing="0" class="table  table-hover text-center">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tgl Pengaduan</th>
                            <th>Nik</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                           
                          </tr>
                        </thead>
                        <?php $i = 1; ?>
                        <?php foreach ($png as $data) : ?>
                          <tbody>
                            <tr>
                              <td><?= $i; ?></td>
                              <td><?= $data["tgl_pengaduan"]; ?></td>
                              <td><?= $data["nik"]; ?></td>
                              <td style="font-size: 14px;"><?= $data["isi_laporan"]; ?></td>
                              <td><img src="../img/<?= $data["foto"]; ?>" width="40px"></td>
                              <td><?= $data["status"]; ?></td>
                            </tr>
                          </tbody>
                          <?php $i++; ?>
                        <?php endforeach; ?>
                      </table>
                    </div>
                    <br><br><br><br>
                    <h6 class="m-0 font-weight-bold text-dark text-right"> Jalan Desa Bojjonggede <?= date("Y-m-d"); ?></h6><br><br>
                    <h6 class="m-0 font-weight-bold text-dark text-right mr-lg-3 p-3" > Petugas, <?= $_SESSION["nama_petugas"]; ?></h6>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    window.print();
    </script>


</body>

</html>