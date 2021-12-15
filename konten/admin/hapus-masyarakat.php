<?php 

    session_start();
if (!isset($_SESSION["status"])) {
  header("Location:../login2.php");
  exit;
}
    require '../fungsiindex.php';
    $id_masyarakat = $_GET["id"];

    if(hpsmasyarakat($id_masyarakat) > 0){

        echo "<script> 
                    alert('Data Berhasil Di hapus')
                    document.location.href = 'data-masyarakat.php';
                </script>";
    }else {
        echo "<script> 
                    alert('Data Berhasil Di hapus')
                    document.location.href = 'data-masyarakat.php';
                </script>";
    }
    
?>