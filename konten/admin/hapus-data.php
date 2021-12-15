<?php
    session_start();
if (!isset($_SESSION["status"])) {
    header("Location:../login2.php");
    exit;
}   
    require '../fungsiindex.php';

    $id_petugas = $_GET["id"];
    if(hapus($id_petugas) > 0){
        echo "<script>
                alert('Data Petugas Berhasil Di hapus')
                document.location.href ='admin.php';
            </script>";
    }else {
         echo "<script>
                alert('Data Petugas gagal Di hapus')
                document.location.href ='admin.php';
            </script>";
    }

?>