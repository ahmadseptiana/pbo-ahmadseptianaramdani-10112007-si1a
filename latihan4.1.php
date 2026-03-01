<?php

function formatRupiah($angka): string {
    return "Rp " . number_format($angka, 0, ',', '.');
}

class Belajar {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubtotal() {
        // Perbaikan: Hapus double '$' dan perbaiki case-sensitive (B besar)
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon) {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
} // Kurung kurawal penutup class harus di sini (setelah semua method)

$data = [
    'namaPembeli' => "Ivan",
    'namaBarang'  => "Sepatu",
    'hargaBarang' => 200000, // Menambahkan data hargaBarang yang kurang di array Anda
    'jumlahBeli'  => 2
];

$belanja = new Belajar();
$belanja->namaPembeli = $data["namaPembeli"];
$belanja->namaBarang  = $data["namaBarang"];
$belanja->hargaBarang = $data["hargaBarang"];
$belanja->jumlahBeli  = $data["jumlahBeli"];

echo "<h2> STRUK BELANJA TOKO </h2>";
echo "Nama Pembeli : " . $belanja->namaPembeli . "<br>";
echo "Nama Barang : " . $belanja->namaBarang . "<br>";
echo "Subtotal : " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
// Perbaikan: Panggil method dengan tanda kurung () dan masukkan argumen diskonnya (misal: 20)
echo "<b>Total (Diskon 20%) : " . formatRupiah($belanja->hitungTotalDenganDiskon(20)) . "</b>";

?>

