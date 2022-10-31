<?php

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");


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
              <a class="nav-link p-4 active" href="index.html">Data Mahasiswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
        <h2>Data Mahasiswa</h2>  
        <a href="tambah.php" class="btn btn-primary mt-2 mb-2">Tambah Data Mahasiswa</a>         
  <table class="table table-bordered">
    <thead class="bg-secondary">
      <tr style="text-align: center;" class="text-light">
      <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach( $mahasiswa as $row ) : ?>
      <tr style="text-align: center;">
      <td><img src="male.png" alt="" width="50px"></td>
        <td><?php echo $row ["nrp"]; ?></td>
        <td><?php echo $row ["nama"]; ?></td>
        <td><?php echo $row ["email"]; ?></td>
        <td><?php echo $row ["jurusan"]; ?></td>
        <td>
            <a href="ubah.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Yakin Mau merubah data');" class="btn btn-primary">Ubah</a> |
            <a href="hapus.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm('Yakin');" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>



    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      // kode JavaScript disini...
    </script>
  </body>
</html>
