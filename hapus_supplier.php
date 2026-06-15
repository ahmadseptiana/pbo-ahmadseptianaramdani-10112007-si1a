<?php 
include 'koneksi.php';

$id = $_GET['id'];

// Menghapus data supplier
mysqli_query($koneksi, "DELETE FROM tb_supplier WHERE id_supplier='$id'");

// Menampilkan pesan berhasil dan mengalihkan halaman
echo "<script>
        alert('Data Supplier berhasil dihapus!');
        window.location.href='index.php#data-supplier';
      </script>";
?>