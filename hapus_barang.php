<?php 
include 'koneksi.php';

$id = $_GET['id'];

// Menghapus data barang
mysqli_query($koneksi, "DELETE FROM tb_barang WHERE kd_barang='$id'");

// Menampilkan pesan berhasil dan mengalihkan halaman
echo "<script>
        alert('Data Barang berhasil dihapus!');
        window.location.href='index.php#data-barang';
      </script>";
?>