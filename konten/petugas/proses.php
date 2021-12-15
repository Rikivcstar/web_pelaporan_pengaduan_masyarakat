<?php 
require '../fungsiindex.php';
if(proses($_GET["id"]) > 0 ){
    echo "<script> 
            alert('proses Berhasil Di lakukan');
            document.location.href= 'verifikasi-petugas.php';
        </script>";
}else {
    echo "<script> 
            alert('proses gagal Di lakukan');
            document.location.href= 'verifikasi-petugas.php';
        </script>";
}

?>