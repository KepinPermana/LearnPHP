<?php 

require 'function.php';
// koneksi database

$conn = mysqli_connect("localhost","root","","phpdasar");


// cek apakah tombol submit sudah di tekan atau belum

if ( isset($_POST["submit"])) {
    
   
    // Cek apakah data berhasil atau tidak

    if (tambah ($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di tambahkan coy !!');
        document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di tambahkan coy !!');
        document.location.href = 'index.php';
        </script>
        ";
    }
  
}

?>


<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <title>Kepin.com - DataMahasiswa </title>
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- NAVBAR -->
    <nav id="main-navbar" class="navbar navbar-expand-md navbar-dark bg-primary py-0">
      <div class="container">

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link p-4 active" href="index.php">Data Mahasiswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

   

<div class="container mt-5">
    <div class="card">
<h2 class="mt-3 ml-4">Form Tambah data Mahasiswa</h2>
<div class="card-body">
<form action="" method="POST">
    <div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="Masukan NRP" aria-label="nrp" id="nrp" name="nrp" required>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" aria-label="nama" id="nama" name="nama" required>
  </div>
</div>
<div class="row mt-2">
<div class="col">
    <input type="email" class="form-control" placeholder="Masukan Email Lengkap" aria-label="email" id="email" name="email" required>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Masukan Nama Jurusan" aria-label="jurusan" id="jurusan" name="jurusan" required>
  </div>
</div>

<div class="row mt-2">

<div class="col">
    <input type="text" class="form-control" placeholder="Masukan Photo Profil" aria-label="gambar" id="gambar" name="gambar">
  </div>
  <div class="col-2">
    <input type="submit" class="form-control btn btn-primary" name="submit">
  </div>
  <div class="col-1">
  <a href="index.php" class="btn btn-danger">Batal</a>
  </div>

</div>

</form>
</div>
    </div>
</div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      // kode JavaScript disini...
    </script>
  </body>
</html>