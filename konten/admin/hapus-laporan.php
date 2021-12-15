<?php 

    session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}
    require '../fungsiindex.php';
    $id_pengaduan = $_GET["id"];

    if(hpslaporan($id_pengaduan) > 0){

        echo "<script> 
                    alert('Data Laporan Berhasil Di hapus')
                    document.location.href = 'lihat-laporan.php';
                </script>";
    }else {
        echo "<script> 
                    alert('Data Laporan Berhasil Di hapus')
                    document.location.href = 'lihat-laporan.php';
                </script>";
    }
