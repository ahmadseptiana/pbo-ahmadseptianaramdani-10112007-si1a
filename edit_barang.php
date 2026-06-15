<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Edit Data Barang</h1></div>
    <div class="container">
        <a href="index.php#data-barang" class="tombol">Kembali</a><br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE kd_barang='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update_barang.php" method="post">
            <table class="table">
                <tr><td>ID Barang</td><td><input type="text" name="kd_barang" value="<?php echo $d['kd_barang']; ?>" readonly></td></tr>
                <tr><td>Nama Barang</td><td><input type="text" name="nama_barang" value="<?php echo $d['nama_barang']; ?>" required></td></tr>
                <tr><td>Harga Jual</td><td><input type="number" name="harga_jual" value="<?php echo $d['harga_jual']; ?>" required></td></tr>
                <tr><td>Stok</td><td><input type="number" name="stok" value="<?php echo $d['stok']; ?>" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Perubahan"></td></tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>