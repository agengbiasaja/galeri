<?php 	
session_start();
include'../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
	echo "<script>
        alert('Anda belum login!');
        document.location.href = '../index.php';
        </script>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-secondary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
         <a href="home.php" class="nav-link">Home</a>
      	<a href="album.php" class="nav-link">Album</a>
        <a href="foto.php" class="nav-link">Foto</a>
      </div>
       <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>

<div class="container">
<div class="row"> 
    <!-- Bagian form untuk menambah foto -->
<div class="col-md-4">
    <div class="card mt-2">
        <div class="card-header">Tambah Foto </div>    
        <div class="class-body">
            <form action="../config/aksi-foto.php" method="POST" enctype="multipart/form-data">
                <label class="form-label">Nama Foto</label>
                <input type="text" name="nama_foto" class="form-control" required>
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi_foto" required></textarea>
                <label class="form-label">Kategori</label>
                <select class="form-control" name="id_kategori" required>
                    <?php   
                        $sql_kat = mysqli_query($koneksi, "SELECT * FROM kategori");
                        while($data_kat = mysqli_fetch_array($sql_kat)){ ?>
                            <option value="<?php  echo $data_kat['id_kategori'] ?>"> <?php  echo $data_kat['nama_kategori'] ?> </option>
                       <?php  } ?>
                </select>
                <div><label class="form-label">Gambar</label></div>
                <input class="form-control" type="file" name="gambar_foto" required>
                <button type="submit" class="btn btn-primary mt-2 " name="tambah">Tambah Foto</button>
            </form>
        </div>            
    </div>
</div>

<!-- Bagian untuk menampilkan data galeri foto -->
<div class="col-md-8">
    <div class="card mt-2">
        <div class="card-header">
            Data Galeri foto
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama foto</th>
                        <th>Deskripsi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $userid = $_SESSION['userid'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM foto");  
                    while($data = mysqli_fetch_array($sql)){ 
                    ?>
                    <tr>
                        <td><?php  echo $no++  ?></td>
                        <td>  <img src="../asset/img/<?php  echo $data['gambar_foto'] ?>" width="100"></td>
                        <td><?php   echo $data['nama_foto'] ?></td>
                        <td><?php   echo $data['deskripsi_foto'] ?></td>
                        <td><?php   echo $data['created_at'] ?></td>
                    </tr>
                    <?php   } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


    
    </div>

</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website Galeri foto | By:Muhammad Dzaki</p>
</footer>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>