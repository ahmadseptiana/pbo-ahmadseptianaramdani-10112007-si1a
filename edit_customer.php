<!DOCTYPE html>
<html lang="id">
<head>
    <title>Edit Data Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="judul"><h1>Edit Data Customer</h1></div>
    <div class="container">
        <a href="index.php#data-customer" class="tombol">Kembali</a><br><br>
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM tb_customer WHERE id_customer='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <form action="update_customer.php" method="post">
            <table class="table">
                <tr><td>ID Customer</td><td><input type="text" name="id_customer" value="<?php echo $d['id_customer']; ?>" readonly></td></tr>
                <tr><td>Nama Customer</td><td><input type="text" name="nama_customer" value="<?php echo $d['nama_customer']; ?>" required></td></tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jenis_kelamin" required>
                            <option value="Laki-laki" <?php if($d['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php if($d['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat_customer" value="<?php echo $d['alamat_customer']; ?>" required></td></tr>
                <tr><td>No Telepon</td><td><input type="text" name="telepon_customer" value="<?php echo $d['telepon_customer']; ?>" required></td></tr>
                <tr><td>Email</td><td><input type="email" name="email_customer" value="<?php echo $d['email_customer']; ?>" required></td></tr>
                <tr><td></td><td><input type="submit" class="tombol" value="Simpan Perubahan"></td></tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>
</html>