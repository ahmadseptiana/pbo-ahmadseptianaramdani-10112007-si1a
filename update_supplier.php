<?php 
include 'koneksi.php';
$id = $_POST['id_supplier'];
$nama = $_POST['nama_supplier'];
$alamat = $_POST['alamat_supplier'];
$telp = $_POST['telepon_supplier'];
$email = $_POST['email_supplier'];

mysqli_query($koneksi, "UPDATE tb_supplier SET nama_supplier='$nama', alamat_supplier='$alamat', telepon_supplier='$telp', email_supplier='$email' WHERE id_supplier='$id'");

echo "<script>alert('✅ Data Supplier berhasil diupdate!'); window.location.href='index.php#data-supplier';</script>";
?>