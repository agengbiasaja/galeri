<?php 
include 'koneksi.php';

if (isset($_POST['tambah'])){
	$nama_kategori = $_POST['nama_kategori'];

	$sql = mysqli_query($koneksi, "INSERT INTO kategori VALUES('','$nama_kategori')");
	echo "<script>
        alert('Album berhasil ditambahkan!');
        document.location.href = '../app/kategori.php';
        </script>";
}

 ?>