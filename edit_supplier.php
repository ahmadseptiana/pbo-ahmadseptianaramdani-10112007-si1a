<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Data Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Edit Data Supplier</h1></div>
    <div class="container">
        <a href="index.php#data-supplier" class="tombol">Kembali</a><br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_supplier WHERE id_supplier='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update_supplier.php" method="post">
            <table class="table">
                <tr><td>ID Supplier</td><td><input type="text" name="id_supplier" value="<?php echo $d['id_supplier']; ?>" readonly></td></tr>
                <tr><td>Nama Supplier</td><td><input type="text" name="nama_supplier" value="<?php echo $d['nama_supplier']; ?>" required></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat_supplier" value="<?php echo $d['alamat_supplier']; ?>" required></td></tr>
                <tr><td>No Telepon</td><td><input type="text" name="telepon_supplier" value="<?php echo $d['telepon_supplier']; ?>" required></td></tr>
                <tr><td>Email</td><td><input type="email" name="email_supplier" value="<?php echo $d['email_supplier']; ?>" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Perubahan"></td></tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>