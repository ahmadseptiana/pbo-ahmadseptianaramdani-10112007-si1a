<?php 
include 'koneksi.php';
$kd_barang = $_POST['kd_barang'];
$nama = $_POST['nama_barang'];
$harga = $_POST['harga_jual'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "UPDATE tb_barang SET nama_barang='$nama', harga_jual='$harga', stok='$stok' WHERE kd_barang='$kd_barang'");

echo "<script>alert('✅ Data Barang berhasil diupdate!'); window.location.href='index.php#data-barang';</script>";
?>