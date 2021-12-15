<?php 
    $server = "localhost";
    $nama = "root";
    $pass = "";
    $database = "db_pengaduan_masyarakat";

    $con = mysqli_connect($server,$nama,$pass,$database) or die (mysqli_error($con));
    // fungsi ambil data dari table databases pengaduan
    function query($query){
        global $con;
        $rows = [];
        $result = mysqli_query($con,$query);
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    // fungsi isi pengaduan
    function isi_laporan($data){
        global $con;
        $nik = strtolower(stripslashes($data["nik"]));
        $tgl_pengaduan = strtolower(stripslashes($data["tgl_pengaduan"]));
        $isi_laporan = strtolower(stripslashes($data["isi_laporan"]));


        $gambar = upload();
        if(!$gambar){

            return false;
        }

        $status = '0';

        $query = "INSERT INTO pengaduan VALUES
                     ('','$tgl_pengaduan','$nik','$isi_laporan','$gambar','$status')";

        mysqli_query($con,$query);
        return mysqli_affected_rows($con);
    }

    function upload(){
        
            $namafile = $_FILES["foto"]["name"];
            $sizegambar = $_FILES["foto"]["size"];
            $error = $_FILES["foto"]["error"];
            $tmpname = $_FILES["foto"]["tmp_name"];
// cek apakah gambar tidak di upload
            if($error === 4){
                echo "<script> 
                            alert('silahkan pilih gambar terlebih dahulu');
                        </script>";
                        return false;
            }
    // cek apakah yg di upload adalah gambar atau bukan
    $ekstensigambarboleh = ["jpg", "jpeg", "png", "pdf"];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));

    if (!in_array($ekstensigambar, $ekstensigambarboleh)) {

        echo "<script>
                alert('yg anda upload bukan gambar');
            </script>";

        return false;
    }
    // cek ukuran gambar jika terlalu besar
    if ($sizegambar > 1000000) {

        echo "<script>
                alert('ukuran file anda terlalu besar');
            </script>";
        return false;
    }
    // generet nama gambar baru 
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    // lolos pengecekan gambar siap di upload

    move_uploaded_file($tmpname, 'img/' . $namafile);
    return $namafile;
    }

    function registerasi($data){
        global $con;
        $nik = strtolower(stripslashes($data["nik"]));
        $name = strtolower(stripslashes($data["nama"]));
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($con,$data["password"]);
        $password2 = mysqli_real_escape_string($con, $data["password2"]);
        $telp = stripslashes(strtolower($data["telp"]));

        // Cek Konfirmasi Password Benar Atau Salah
        if($password !== $password2){
            echo "<script>
                    alert('password anda tidak sesuai ');
            </script>";

            return false;
        } 

        // enkripssi password 
        $password = password_hash($password,PASSWORD_DEFAULT);
        // insert ke dalam database
         mysqli_query($con,"INSERT INTO masyarakat VALUES ('','$nik','$name', '$username','$password','$telp')");
         
        return mysqli_affected_rows($con);
    }
function regis_petugas($data)
{
    global $con;
    $name = strtolower(stripslashes($data["nama_petugas"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($con, $data["password"]);
    $password2 = mysqli_real_escape_string($con, $data["password2"]);
    $telp = stripslashes(strtolower($data["telp"]));
    $level = $data["status"];

    // Cek Konfirmasi Password Benar Atau Salah
    if ($password !== $password2) {
        echo "<script>
                    alert('password anda tidak sesuai ');
            </script>";

        return false;
    }

    // enkripssi password 
    $password = password_hash($password, PASSWORD_DEFAULT);
    // insert ke dalam database
    mysqli_query($con, "INSERT INTO petugas VALUES ('','$name', '$username','$password','$telp','$level')");

    return mysqli_affected_rows($con);
}
function proses($id){
    global $con;
    mysqli_query($con,"UPDATE  pengaduan SET status ='proses' WHERE id_pengaduan = $id");

    return mysqli_affected_rows($con);
}

function hapus($id_petugas){
    global $con;
    mysqli_query($con,"DELETE FROM petugas WHERE id_petugas =$id_petugas");
    return mysqli_affected_rows($con);
}

function hpsmasyarakat($id_masyarakat){
    global $con;
    mysqli_query($con,"DELETE FROM masyarakat WHERE id_masyarakat = $id_masyarakat");
    return mysqli_affected_rows($con);
}

function hpslaporan($id_pengaduan){
    global $con;
    mysqli_query($con,"DELETE FROM pengaduan WHERE id_pengaduan= $id_pengaduan");
    return mysqli_affected_rows($con);
}

function hpstanggapan($id_tanggapan){
    global $con;
    mysqli_query($con,"DELETE FROM tanggapan WHERE id_tanggapan= $id_tanggapan");
    return mysqli_affected_rows($con);
}

function contact($data){
    global $con;

    $username = $data["username"];
    $email = $data["email"];
    $isi = $data["contact"];
    $telp = $data["telp"];

    $result = mysqli_query($con,"INSERT INTO contact VALUES ('','$username','$email','$isi','$telp')");
    return mysqli_affected_rows($con);
}

function cari($keyword){

    $query = "SELECT * FROM pengaduan 
              WHERE status = '0' AND 
               nik  LIKE '%$keyword%'
                ";

    return query($query);
}

?>




