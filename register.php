<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-seconday">
  <div class="container">
    <a class="navbar-brand" href="index.php">Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
      </div>
       <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>
    </div>
  </div>
</nav>
<div class="container py-5">
<div class="row justify-content-center">
<div class="col-md-5"> 
<div class="card-body bg-secondary p-5 text-dark bg-opacity-10 outline-success" style="border-radius: 1rem;"> 

<div class="text-center"> 
<h5>  Daftar akun  </h5>
</div>
<form action="config/aksi-register.php" method="POST">
      <label class="form-label">Username </label>
      <input type=" text" name="username" class="form-control"required>
       <label class="form-label">Password </label>
      <input type=" text" name="password" class="form-control"required>
         <label class="form-label">Email </label>
      <input type="email" name="email" class="form-control"required>
         <label class="form-label">Nama Lengkap </label>
      <input type=" text" name="namalengkap" class="form-control"required>
      <label class="form-label">Alamat</label>
      <input type=" text" name="alamat" class="form-control"required>
      <div class="d-grid mt-2"><button class="btn btn-primary" type="submit" name="kirim">Daftar</button></div>
  </form>
  <hr>  <p> Sudah punya akun? <a href="login.php">Masuk disini!</a></p>
</div>
</div>
</div> </div>
<footer class="d-flex justify-content-center border-top mt-3
bg-light fixed-bottom">
  <p>&copy; Website Galeri foto | By:Muhammad Dzaki</p>
</footer>
<script type="text/javascript" src="asset/js/bootsrtrap.min.js"></script>
</body>
</html>