<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uas Praktikum - CRUD PHP</title>
    <link rel="stylesheet" href="style.css?v=11">
</head>
<body>

    <div class="judul">
        <h1>Uas Praktikum</h1>
        <h2>Tanggal 15 Juni 2026</h2>
    </div>

    <div class="menu">
        <div class="container" style="padding-top: 0; padding-bottom: 0;">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a href="#">Data Master</a>
                    <ul>
                        <li><a href="#data-user">Data User</a></li>
                        <li><a href="#data-barang">Data Barang</a></li>
                        <li><a href="#data-customer">Data Customer</a></li>
                        <li><a href="#data-supplier">Data Supplier</a></li>
                    </ul>
                </li>
                <li><a href="#">Data Transaksi</a></li>
                <li><a href="#">Laporan</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        
        <a href="input.php" class="tombol">+ Tambah Data User</a>
        <h3 id="data-user">Data User</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Tipe User</th>
                    <th style="width: 150px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'koneksi.php';
                $no = 1;
                $data_user = mysqli_query($koneksi, "SELECT * FROM user");
                
                while($d = mysqli_fetch_array($data_user)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['id_user']; ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><?php echo $d['tipe_user']; ?></td>
                        <td>
                            <a class="edit" href="edit.php?id=<?php echo $d['id_user']; ?>">Edit</a> | 
                            <a class="hapus" href="hapus.php?id=<?php echo $d['id_user']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>

        <br><br><hr style="border: 0; border-top: 1px solid #d0e3e5;"><br>

        <a href="input_supplier.php" class="tombol">+ Tambah Data Supplier</a>
        <h3 id="data-supplier">Data Supplier</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>ID Supplier</th>
                    <th>Nama Supplier</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th style="width: 150px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no_sup = 1;
                $data_supplier = mysqli_query($koneksi, "SELECT * FROM tb_supplier");
                
                if($data_supplier) {
                    while($d_sup = mysqli_fetch_array($data_supplier)){
                        ?>
                        <tr>
                            <td><?php echo $no_sup++; ?></td>
                            <td><?php echo $d_sup['id_supplier']; ?></td>
                            <td><?php echo $d_sup['nama_supplier']; ?></td>
                            <td><?php echo $d_sup['alamat_supplier']; ?></td>
                            <td><?php echo $d_sup['telepon_supplier']; ?></td>
                            <td><?php echo $d_sup['email_supplier']; ?></td>
                            <td>
                                <a class="edit" href="edit_supplier.php?id=<?php echo $d_sup['id_supplier']; ?>">Edit</a> | 
                                <a class="hapus" href="hapus_supplier.php?id=<?php echo $d_sup['id_supplier']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data supplier ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                    }
                } else {
                    echo "<tr><td colspan='7' style='text-align:center; color:red;'>Error: " . mysqli_error($koneksi) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <br><br><hr style="border: 0; border-top: 1px solid #d0e3e5;"><br>

        <a href="input_barang.php" class="tombol">+ Tambah Data Barang</a>
        <h3 id="data-barang">Data Barang</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th style="width: 150px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no_brg = 1;
                $data_barang = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                
                if($data_barang) {
                    while($d_brg = mysqli_fetch_array($data_barang)){
                        ?>
                        <tr>
                            <td><?php echo $no_brg++; ?></td>
                            <td><?php echo $d_brg['kd_barang']; ?></td>
                            <td><?php echo $d_brg['nama_barang']; ?></td>
                            <td><?php echo $d_brg['harga_jual']; ?></td>
                            <td><?php echo $d_brg['stok']; ?></td>
                            <td>
                                <a class="edit" href="edit_barang.php?id=<?php echo $d_brg['kd_barang']; ?>">Edit</a> | 
                                <a class="hapus" href="hapus_barang.php?id=<?php echo $d_brg['kd_barang']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data barang ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                    }
                } else {
                    echo "<tr><td colspan='6' style='text-align:center; color:red;'>Error: " . mysqli_error($koneksi) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <br><br><hr style="border: 0; border-top: 1px solid #d0e3e5;"><br>

        <a href="input_customer.php" class="tombol">+ Tambah Data Customer</a>
        <h3 id="data-customer">Data Customer</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">No</th>
                    <th>ID Customer</th>
                    <th>Nama Customer</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th style="width: 150px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no_cust = 1;
                // Memanggil data dari tb_customer
                $data_customer = mysqli_query($koneksi, "SELECT * FROM tb_customer");
                
                if($data_customer) {
                    while($d_cust = mysqli_fetch_array($data_customer)){
                        ?>
                        <tr>
                            <td><?php echo $no_cust++; ?></td>
                            <td><?php echo $d_cust['id_customer']; ?></td>
                            <td><?php echo $d_cust['nama_customer']; ?></td>
                            <td><?php echo $d_cust['jenis_kelamin']; ?></td>
                            <td><?php echo $d_cust['alamat_customer']; ?></td>
                            <td><?php echo $d_cust['telepon_customer']; ?></td>
                            <td><?php echo $d_cust['email_customer']; ?></td>
                            <td>
                                <a class="edit" href="edit_customer.php?id=<?php echo $d_cust['id_customer']; ?>">Edit</a> | 
                                <a class="hapus" href="hapus_customer.php?id=<?php echo $d_cust['id_customer']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data customer ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                    }
                } else {
                    echo "<tr><td colspan='8' style='text-align:center; color:red;'>Error: " . mysqli_error($koneksi) . "</td></tr>";
                }
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>