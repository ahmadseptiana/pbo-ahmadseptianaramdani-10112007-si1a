<?php 
include 'koneksi.php';
$id = $_POST['id_customer'];
$nama = $_POST['nama_customer'];
$jk = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat_customer'];
$telp = $_POST['telepon_customer'];
$email = $_POST['email_customer'];

mysqli_query($koneksi, "UPDATE tb_customer SET nama_customer='$nama', jenis_kelamin='$jk', alamat_customer='$alamat', telepon_customer='$telp', email_customer='$email' WHERE id_customer='$id'");

echo "<script>alert('✅ Data Customer berhasil diupdate!'); window.location.href='index.php#data-customer';</script>";
?>