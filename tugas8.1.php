<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    public $gajiPokok;
    public $totalGaji;

    // Nomor 5: Constructor dengan parameter
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;
        $this->gajiPokok = $this->getGajiPokok($golongan);
        
        // Nomor 2: Besaran lembur Rp 15.000/jam
        $this->totalGaji = $this->gajiPokok + ($jamLembur * 15000);
    }

    // Nomor 1: Method getGajiPokok dengan ketentuan golongan
    public function getGajiPokok($gol) {
        $daftarGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return isset($daftarGaji[$gol]) ? $daftarGaji[$gol] : 0;
    }

    // Nomor 7: Destructor untuk meng-unset objek
    public function __destruct() {
        // Objek dihapus dari memori
    }
}

// Nomor 4: Penggunaan Array untuk CRUD
$daftarKaryawan = [];

// Menambah data default (Sesuai contoh output di gambar)
$daftarKaryawan[] = new Karyawan("Winny", "IIb", 30);
$daftarKaryawan[] = new Karyawan("Stendy", "IIIc", 32);
$daftarKaryawan[] = new Karyawan("Alfred", "IVb", 30);

// Nomor 3 & 6: Perulangan, Percabangan, dan Tampilan Output
function tampilkanMenu() {
    echo "===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
}

// Simulasi Jalannya Program (CLI)
while (true) {
    tampilkanMenu();
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == "1") {
        echo "\n===== DATA GAJI KARYAWAN =====\n";
        echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";
        foreach ($daftarKaryawan as $index => $k) {
            echo ($index + 1) . " | " . $k->nama . " | " . $k->golongan . " | " . $k->jamLembur . " | Rp" . number_format($k->totalGaji, 0, ',', '.') . "\n";
        }
        echo "\n";
    } 
    elseif ($pilihan == "2") {
        echo "Nama: "; $nama = trim(fgets(STDIN));
        echo "Golongan: "; $gol = trim(fgets(STDIN));
        echo "Jam Lembur: "; $lembur = trim(fgets(STDIN));
        $daftarKaryawan[] = new Karyawan($nama, $gol, $lembur);
        echo "Data berhasil ditambahkan!\n\n";
    }
    elseif ($pilihan == "3") {
        echo "Nomor data yang diupdate: "; $idx = trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$idx])) {
            echo "Nama Baru: "; $nama = trim(fgets(STDIN));
            echo "Golongan Baru: "; $gol = trim(fgets(STDIN));
            echo "Jam Lembur Baru: "; $lembur = trim(fgets(STDIN));
            $daftarKaryawan[$idx] = new Karyawan($nama, $gol, $lembur);
            echo "Data berhasil diupdate!\n\n";
        }
    }
    elseif ($pilihan == "4") {
        echo "Nomor data yang dihapus: "; $idx = trim(fgets(STDIN)) - 1;
        if (isset($daftarKaryawan[$idx])) {
            unset($daftarKaryawan[$idx]); // Memicu Destructor
            $daftarKaryawan = array_values($daftarKaryawan); // Reset index array
            echo "Data berhasil dihapus!\n\n";
        }
    }
    elseif ($pilihan == "5") {
        echo "Keluar program...\n";
        break;
    }
    else {
        echo "Pilihan tidak tersedia.\n\n";
    }
}
?>