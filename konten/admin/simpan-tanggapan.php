<?php

session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}

require '../fungsiindex.php';

$id_pengaduan = $_POST["id_pengaduan"];
$tgl = $_POST["tgl_tanggapan"];
$tanggap = $_POST["tanggapan"];
$id_petugas = $_POST["id_petugas"];
$status = 'selesai';

$sql = mysqli_query($con, "INSERT INTO tanggapan (id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES ('$id_pengaduan','$tgl','$tanggap','$id_petugas')");
$updt = mysqli_query($con, "UPDATE pengaduan SET status ='$status' WHERE id_pengaduan = $id_pengaduan");

if ($sql) {
    echo "<script>
                alert('Tanggapan Berhasil Di lakukaan')
                document.location.href = 'admin.php';
            </script>";
}
?>