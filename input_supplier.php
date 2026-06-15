<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Tambah Data Supplier</h1></div>
    <div class="container">
        <a href="index.php#data-supplier" class="tombol">Kembali</a><br><br>
        <form action="simpan_supplier.php" method="post">
            <table class="table">
                <tr><td>ID Supplier</td><td><input type="text" name="id_supplier" required></td></tr>
                <tr><td>Nama Supplier</td><td><input type="text" name="nama_supplier" required></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat_supplier" required></td></tr>
                <tr><td>No Telepon</td><td><input type="text" name="telepon_supplier" required></td></tr>
                <tr><td>Email</td><td><input type="email" name="email_supplier" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Data"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>