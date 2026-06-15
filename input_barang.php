<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Tambah Data Barang</h1></div>
    <div class="container">
        <a href="index.php#data-barang" class="tombol">Kembali</a><br><br>
        <form action="simpan_barang.php" method="post">
            <table class="table">
                <tr><td>ID Barang</td><td><input type="text" name="kd_barang" required></td></tr>
                <tr><td>Nama Barang</td><td><input type="text" name="nama_barang" required></td></tr>
                <tr><td>Harga Jual</td><td><input type="number" name="harga_jual" required></td></tr>
                <tr><td>Stok</td><td><input type="number" name="stok" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Data"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>