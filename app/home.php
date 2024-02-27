<?php   
session_start();
$userid = $_SESSION['userid'];
include'../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
  echo "<script>
        alert('Anda belum login!');
        document.location.href = '../login.php';
        </script>";
}
$username = $_SESSION['username'];


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
        <a href="kategori.php" class="nav-link">Kategori</a>
        <a href="foto.php" class="nav-link">Foto</a>
      </div>
       <a href="../config/aksi-logout.php" class="btn btn-outline-danger m-1">Keluar</a>
    </div>
  </div>
</nav>
<h3 class="text-left" style="margin-left: 25px;">Selamat Datang <?= $username ?></h3>
<br>
<div class="container mt-3">
  <div class="row">
<?php 
$query = mysqli_query($koneksi, "SELECT * FROM foto ");
while($data = mysqli_fetch_array($query)){
 ?>
<div class="col-md-3">
      <div class="card">
        <img style="height:12rem;" src="../asset/img/<?php echo $data['gambar_foto'] ?>" class="card-img-top" title="<?php echo $data['nama_foto'] ?>" ;>
        <div class="card-footer text-center">
        </div>
      </div>
    </div>
<?php } ?>
  
  </div>
</div>
<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website Galeri foto | By:Muhammad Dzaki</p>
</footer>
<script type="text/javascript" src="../asset/js/bootsrtrap.min.js"></script>
</body>
</html>