<?php 
include 'koneksi.php';

if (isset($_POST['tambah'])){
    $id_kategori = $_POST['id_kategori'];
    $nama_foto = $_POST['nama_foto'];
    $deskripsi_foto = $_POST['deskripsi_foto'];
    $foto = $_FILES['gambar_foto']['name'];
    $tmp = $_FILES['gambar_foto']['tmp_name'];
    $lokasi = '../asset/img/';
    
    // Tambahkan awalan atau akhiran unik pada nama file
    $namafoto = 'prefix_' . uniqid() . '_' . $foto;
    
    $created_at = date('Y-m-d');
    $update_at = date('Y-m-d'); // Anda perlu mendefinisikan variabel $update_at

    // Periksa apakah file berhasil diupload
    if (move_uploaded_file($tmp, $lokasi.$namafoto)) {
        $sql = mysqli_query($koneksi, "INSERT INTO foto VALUES('', '$id_kategori', '$nama_foto', '$deskripsi_foto', '$namafoto', '$created_at', '$update_at')");
        echo "<script>
            alert('Foto berhasil ditambahkan!');
            document.location.href = '../app/foto.php';
            </script>";
    } else {
        echo "<script>
            alert('Gagal mengupload file!');
            document.location.href = '../app/foto.php';
            </script>";
    }
}
?>
