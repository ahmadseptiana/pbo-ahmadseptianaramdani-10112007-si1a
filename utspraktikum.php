<?php

// ================= CLASS PRODUK =================
class Produk {
    public $nama;
    public $harga;
    public $stok;

    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method tampil
    public function tampil() {
        return "{$this->nama} | {$this->harga} | {$this->stok}";
    }

    // Method update
    public function update($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }
}

// ================= ARRAY DATA =================
$dataProduk = [];

// ================= PROGRAM UTAMA =================
do {
    echo "\n===== MENU TOKO =====\n";
    echo "1. Tampilkan Data Produk\n";
    echo "2. Tambah Produk\n";
    echo "3. Update Produk\n";
    echo "4. Hapus Produk\n";
    echo "0. Keluar\n";
    echo "Pilih menu: ";

    $pilih = trim(fgets(STDIN));

    // ================= PERCABANGAN =================
    if ($pilih == 1) {

        echo "\n--- Data Produk ---\n";

        if (empty($dataProduk)) {
            echo "Data masih kosong.\n";
        } else {
            // PERULANGAN
            foreach ($dataProduk as $i => $produk) {
                echo ($i + 1) . ". " . $produk->tampil() . "\n";
            }
        }

    } elseif ($pilih == 2) {

        echo "Masukkan nama produk: ";
        $nama = trim(fgets(STDIN));

        echo "Masukkan harga: ";
        $harga = trim(fgets(STDIN));

        echo "Masukkan stok: ";
        $stok = trim(fgets(STDIN));

        $produkBaru = new Produk($nama, $harga, $stok);
        $dataProduk[] = $produkBaru;

        echo "Produk berhasil ditambahkan!\n";

    } elseif ($pilih == 3) {

        echo "\n--- Update Produk ---\n";

        if (empty($dataProduk)) {
            echo "Data kosong.\n";
        } else {
            foreach ($dataProduk as $i => $produk) {
                echo ($i + 1) . ". " . $produk->tampil() . "\n";
            }

            echo "Pilih nomor produk yang akan diupdate: ";
            $index = trim(fgets(STDIN)) - 1;

            if (isset($dataProduk[$index])) {

                echo "Nama baru: ";
                $nama = trim(fgets(STDIN));

                echo "Harga baru: ";
                $harga = trim(fgets(STDIN));

                echo "Stok baru: ";
                $stok = trim(fgets(STDIN));

                // METHOD UPDATE
                $dataProduk[$index]->update($nama, $harga, $stok);

                echo "Produk berhasil diupdate!\n";
            } else {
                echo "Produk tidak ditemukan!\n";
            }
        }

    } elseif ($pilih == 4) {

        echo "\n--- Hapus Produk ---\n";

        if (empty($dataProduk)) {
            echo "Data kosong.\n";
        } else {
            foreach ($dataProduk as $i => $produk) {
                echo ($i + 1) . ". " . $produk->tampil() . "\n";
            }

            echo "Pilih nomor produk yang akan dihapus: ";
            $hapus = trim(fgets(STDIN)) - 1;

            if (isset($dataProduk[$hapus])) {
                unset($dataProduk[$hapus]);
                $dataProduk = array_values($dataProduk); // rapihin index
                echo "Produk berhasil dihapus!\n";
            } else {
                echo "Produk tidak ditemukan!\n";
            }
        }

    } elseif ($pilih == 0) {
        echo "Program selesai.\n";
    } else {
        echo "Pilihan tidak valid!\n";
    }

} while ($pilih != 0);