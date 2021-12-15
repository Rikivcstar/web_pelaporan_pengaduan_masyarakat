<?php
session_start();
if (isset($_SERVER["nik"])) {
    header("Location:masyarakat.php");
    exit;
}
require 'fungsiindex.php';

    if(isset($_POST["kirim"])){

        if(contact($_POST) > 0){
            echo "<script>
                        alert('Pengiriman Berhasil Dilakukan')
                        document.location.href='index.php';
                    </script>";
        }else {
            echo "<script>
                        alert('Pengiriman Gagal Dilakukan')
                        document.location.href='index.php';
                    </script>";
        }
    }



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- my Css -->
    <link rel="stylesheet" href="style.css">
    <!--my font  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Halaman Utama</title>
    <style>
        .jumbotron {
            background-image: url(img/utama.jpg);
            height: 100vh;
            background-size: cover;
            padding: 3rem 6rem;
        }

        /* nav {
            background-color: white;
        } */
    </style>
</head>

<body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <h2 class="navbar-brand" style="color: white; text-shadow: 2px 2px 1px rgba(0, 0, 0, .9);">Ryansyah</h2>
            <button class="navbar-toggler text-dark" type="button " data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto" style="color: white; text-shadow: 2px 2px 1px rgba(0, 0, 0, .8);">
                    <li class=" nav-item me-5">
                        <a class="nav-link active" style="color: white; font-weight: 300;" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link " style="color: white; font-weight: 300" href="#about">About</a>
                    </li>
                    <li class="nav-item me-5">
                        <a href="#gallery" style="color: white; " class="nav-link">Gallery</a>
                    </li>
                    
                    <li class="nav-item me-5">
                        <a class="nav-link " style="color: white; font-weight: 300" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class=" nav-link text-white btn btn-primary" href="register.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <h1 style=" font-family: 'Source Sans Pro', sans-serif; font-size: 40px; margin-top: 100px; text-shadow: 2px 1px 1px rgba(0, 0, 0, .9); color: white; margin-top: 200px;">Selamat Datang Di Website <br> Layanan Pelaporan Pengaduan Masyarakat </h1>
        <p class="lead " style="font-size: 
            18px;text-shadow: 2px 1px 1px rgba(0, 0, 0, .9); color: white;">Silahkan <span> Login </span> Bagi Yg Sudah Mempunyai Akun</p>
        <hr style="width: 400px; border: 3px solid black; margin: 15px auto
            ;">
        <a href="login.php" class="btn btn-success text-white me-3" style="width: 100px;">LOGIN </a>

    </section>
    <!-- akhir jumbotrzon -->
    <!-- About -->
    <section id="about" class="p-5">
        <div class="container">
            <div class="row text-center" style="margin-top: 40px;">
                <div class="col-md-12">
                    <h3 style="font-family: 'Viga', sans-serif; font-size: 30px; text-shadow: 2px 2px 2px rgba(0, 0, 0, .8); color: black;">About Me</h3>
                </div>
            </div>
            <div class="row mt-4 text-center">
                <div class="col-md-12">
                    <p style="font-weight: 400;">Heeloo, Walcome too <span style="font-weight: bold;"> " WEBSITE PELAPORAN PENGADUAN MASYARAKAT " </span> Di web ini kami ingin memberikan pelayanan kepada masyarakat terkait pengaduan yg ingin masyarakat inginkan kepada kami sebagai pemerintahan, Kami siap membantu selama <span style="font-weight: bold;">24 jam </span> kepada masyarakat, Berikan laporan anda kepada kami,<span> TERIMAKASIH TELAH BERKUNJUNG KE WEBSITE RESMI DARI KAMI.</span> </p>

                </div>
            
        </div>
    </section>
    <!-- akhir About -->
    <!-- gallery Pelaporan pengaduan masyarakat -->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row text-center">
                <h3 style="font-family: 'Viga', sans-serif; font-size: 30px; text-shadow: 2px 2px 2px rgba(0, 0, 0, .8); color: black;">Gallery</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </section>
    <!-- akhir gellery -->
    <!-- awal contact form -->
    <section id="contact" class="p-5 mt-5">
        <div class="container ">
            <div class="row text-center" style="margin-top: 40px;">
                <div class="col-md">
                    <h3 class="mb-5" style="font-family: 'Viga', sans-serif; font-size: 30px; text-shadow: 2px 2px 2px rgba(0, 0, 0, .8); color: white;">Contact Me</h3>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-md-7 ">
                    <form action="" method="post" class="form ">
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">USERNAME :</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">EMAIL :</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">CONTACT :</label>
                            <textarea name="contact" id="contact" cols="30" rows = "5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" style="font-weight: bold;">NO.TELEPON :</label>
                            <input type="text" name="telp" class="form-control">
                        </div>
                        <button type="submit" name="kirim" class="btn btn-primary">KIRIM</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!-- akhir kontak form -->
    <!-- footer -->
    <footer class="text-white text-center" style="line-height: 50px; background-image: linear-gradient(230deg, #E60497, #E61204, #9305B9); height: 50px; font-size: 15px; margin-top: 50px;">
        <p>Created With <i class="bi bi-heart-half text-dark"></i> By <a href="#" class="text-white fw-bold">Ryansyah3r</a> </p>
    </footer>
    <!-- akhir footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>