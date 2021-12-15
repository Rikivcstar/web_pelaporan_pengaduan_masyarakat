<?php 

    session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}
    require '../fungsiindex.php';
    $id_tanggapan = $_GET["id"];

    if(hpstanggapan($id_tanggapan) > 0){

        echo "<script> 
                    alert('Data Tanggapan Berhasil Di hapus')
                    document.location.href = 'lihat-tanggapan.php';
                </script>";
    }else {
        echo "<script> 
                    alert('Data Tanggapan Berhasil Di hapus')
                    document.location.href = 'admin.php';
                </script>";
    }
