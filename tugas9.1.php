<?php

// ================= CLASS INDUK =================
class Tabungan {
    protected $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    // getter (encapsulation)
    public function getSaldo() {
        return $this->saldo;
    }

    // setor tunai
    public function setor($jumlah) {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
        }
    }

    // tarik tunai
    public function tarik($jumlah) {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi!\n";
        }
    }
}

// ================= CLASS ANAK =================
class Siswa extends Tabungan {
    private $nama;

    public function __construct($nama, $saldoAwal) {
        parent::__construct($saldoAwal);
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    // siswa hanya bisa akses miliknya sendiri
    public function aksesTabungan() {
        return "Siswa: " . $this->nama . " | Saldo: " . $this->saldo . "\n";
    }
}

// ================= PROGRAM UTAMA =================

// array siswa
$siswa = [
    new Siswa("Siswa 1", 100000),
    new Siswa("Siswa 2", 150000),
    new Siswa("Siswa 3", 200000)
];

// tampilkan saldo awal
echo "=== SALDO AWAL ===\n";
foreach ($siswa as $s) {
    echo $s->aksesTabungan();
}

// buka file (fopen)
$file = fopen("log_tabungan.txt", "w");

// input via command prompt (fgets)
$handle = fopen("php://stdin", "r");

echo "\n=== TRANSAKSI ===\n";

for ($i = 0; $i < count($siswa); $i++) {
    echo "\n" . $siswa[$i]->getNama() . "\n";

    echo "1. Setor\n2. Tarik\nPilih: ";
    $pilih = trim(fgets($handle));

    echo "Masukkan jumlah: ";
    $jumlah = trim(fgets($handle));

    if ($pilih == 1) {
        $siswa[$i]->setor($jumlah);
        fwrite($file, $siswa[$i]->getNama() . " setor: $jumlah\n");
    } elseif ($pilih == 2) {
        $siswa[$i]->tarik($jumlah);
        fwrite($file, $siswa[$i]->getNama() . " tarik: $jumlah\n");
    } else {
        echo "Pilihan tidak valid\n";
    }
}

// tampilkan saldo akhir
echo "\n=== SALDO AKHIR ===\n";
foreach ($siswa as $s) {
    echo $s->aksesTabungan();
}

// tutup file
fclose($file);
fclose($handle);

?>