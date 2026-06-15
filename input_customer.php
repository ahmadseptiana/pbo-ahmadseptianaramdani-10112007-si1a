<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Tambah Data Customer</h1></div>
    <div class="container">
        <a href="index.php#data-customer" class="tombol">Kembali</a><br><br>
        <form action="simpan_customer.php" method="post">
            <table class="table">
                <tr><td>ID Customer</td><td><input type="text" name="id_customer" required></td></tr>
                <tr><td>Nama Customer</td><td><input type="text" name="nama_customer" required></td></tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat_customer" required></td></tr>
                <tr><td>No Telepon</td><td><input type="text" name="telepon_customer" required></td></tr>
                <tr><td>Email</td><td><input type="email" name="email_customer" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Data"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>