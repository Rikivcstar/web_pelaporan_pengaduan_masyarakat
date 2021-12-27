<?php
session_start();
if (isset($_SERVER["nik"])) {
    header("Location:masyarakat.php");
    exit;
}

require 'fungsiindex.php';
if(isset($_POST["kirim"]))
{
  if(contact($_POST) > 0 )
  {
    echo "<script>
          alert('Permintaan Pesan Berhasil Dikirim')
          document.href.location = 'index.php';
        </script>";
  }else {

    echo "<script>
          alert('Permintaan Pesan Berhasil Dikirim')
          document.href.location = 'index.php';
        </script>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- link My css -->
    <link rel="stylesheet" href="styles.css" />
    <!-- link icons bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <!-- link google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600&display=swap" rel="stylesheet" />
    <title>Web Pengaduan Masyarakat</title>
  </head>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark  fixed-top">
      <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#"><h2>PPM</h2></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <a href="register.php" class="btn btn-khusus">Sign In <i class="bi bi-arrow-right-circle ms-1 fw-bold"></i></a>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <!-- start Hero  -->
    <section id="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2>
              Selamat Datang <br />
              Di Website <br />
              <span class="beda">Pelaporan pengaduan Masyarakat</span>
            </h2>
            <p>Website yg menyediakan layanan Kepada masyarakat untuk melakukan pengaduan, Silahkan berikan pengaduan anda kepada kami.</p>
            <a href="login.php" class="btn btn-khusus" style="margin-left: -1px">LOGIN<i class="bi bi-arrow-right-circle ms-2 fw-bold"></i></a>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="img/Group 1.png" class="img-fluid mt-5 ms-2 rounded-circle" style="border: 1px solid #252734; background-color: #252734" width="600" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- end hero -->
    <!-- start about -->
    <section id="about">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <h2 class="text-white fw-bold mb-4">About Us</h2>
            <hr class="color-acsen" />
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-12">
            <p style="font-size: 18px; font-weight: 300; margin-top: 50px">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus autem, sit tenetur recusandae officiis excepturi maxime ea maiores minima nihil sint molestiae veritatis quidem cumque libero neque porro unde. Blanditiis,
              in? Id unde delectus facilis dolores iste ab odio et?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis commodi saepe libero voluptatem itaque iste, nam possimus nesciunt aut est beatae voluptas ullam cumque
              rerum hic eaque tenetur. Minus, ipsam.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- end about -->
    <!-- start galery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="text-white fw-bold mb-4">Gallery</h2>
            <hr class="color-acsen" />
          </div>
        </div>
        <div class="row mt-5 text-center">
          <div class="col-md-3">
            <img src="img/christina-wocintechchat-com-faEfWCdOKIg-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/dylan-gillis-KdeqA3aTnBY-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/hannah-busing-Zyx1bK9mqmA-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/kylie-lugo-t0BavJY0M-U-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/omar-lopez-1qfy-jDc_jo-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/tezos-3-88RFifBno-unsplash.jpg" alt="image1" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/tezos-BlKBaiFdNgA-unsplash.jpg" alt="" class="img-fluid" />
          </div>
          <div class="col-md-3">
            <img src="img/vonecia-carswell-0aMMMUjiiEQ-unsplash.jpg" alt="" class="img-fluid mb-5" />
          </div>
        </div>
      </div>
    </section>
    <!-- end galery -->
    <!-- start contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="text-white fw-bold mt-5 mb-3">Contact Us</h2>
            <hr class="color-acsen mt-5 mb-5" />
          </div>
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-md-4 text-center">
            <div class="card" style="width: 88%; background-color: #ff9100; margin-left: 30px">
              <div class="card-body">
                <i class="bi bi-envelope-fill" style="color: #fff; font-size: 60px"></i>
                <h5 class="card-title">Contact Us</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti debitis amet possimus consectetur explicabo</p>
              </div>
            </div>
            <ul class="list-group" style="width: 100%; margin-top: 30px; margin-left: -25px">
              <li class="list-group-item" style="font-size: 30px; font-weight: 600">Our Office</li>
              <li class="list-group-item">Riki Reza Ryansyah</li>
              <li class="list-group-item">Kp. Setu Kec. Bojonggede, Kel. bojonggede, Kab. Bogor</li>
            </ul>
          </div>
          <div class="col-md-8">
            <form action="" method="POST" class="mt-4 ms-5">
              <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control bg-transparent text-white" id="email" name="email" placeholder="Masukan email anda" />
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control bg-transparent text-white" id="nama" name="username" placeholder="Masukan nama anda" />
              </div>
              <div class="mb-3">
                <label for="number" class="form-label"> Number Phone</label>
                <input type="number" class="form-control bg-transparent text-white" id="number" name="telp" placeholder="Masukan Nomor handphone  anda" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control bg-transparent text-white" id="pesan" name="contact" rows="3"></textarea>
              </div>
              <button type="submit" name="kirim" class="btn btn-warning text-white fw-bold">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#252734"
          fill-opacity="1"
          d="M0,96L48,112C96,128,192,160,288,192C384,224,480,256,576,229.3C672,203,768,117,864,106.7C960,96,1056,160,1152,181.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- end contact -->
    <!-- start footer -->
    <footer id="footer">
      <div class="row text-center">
        <div class="col-md-12">
          <img src="img/indo.png" alt="indonesia" class="img-fluid my-3" width="60" />
          <p class="text-white">Copyright <i class="bi bi-suit-heart-fill text-danger"></i> 2021 By Riki Reza</p>
          <a href="https://www.instagram.com/_rikyreza/" style="color: #fff"> <i class="bi bi-instagram me-1" style="font-size: 25px"></i></a>
          <a href="https://github.com/rikivcstar/" style="color: #fff"> <i class="bi bi-github me-1" style="font-size: 25px"></i> </a>
          <a href="https://www.youtube.com/channel/UCJPEGRSqEog52z-aQYeIbsA/" style="color: #fff"> <i class="bi bi-youtube me-1" style="font-size: 25px"></i></a><br />
        </div>
      </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
