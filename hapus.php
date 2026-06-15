<?php 
include 'koneksi.php';

$id = $_GET['id'];

// Menghapus data user
mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");

// Menampilkan pesan berhasil dan mengalihkan halaman
echo "<script>
        alert('Data User berhasil dihapus!');
        window.location.href='index.php#data-user';
      </script>";
?>
?>