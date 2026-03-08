<?php

function formatRupiah($angka){
    return "Rp " . number_format($angka,0,',','.');
}

class BelanjaWarung {
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    public function hitungSubtotal(){
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungDiskon($subtotal){
        if($subtotal > 100000){
            return $subtotal * 0.1;
        }
        return 0;
    }

    public function hitungTotal(){
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon($subtotal);
        return $subtotal - $diskon;
    }
}

$dataBelanja = [
    [
        "nama" => "Ivan",
        "barang" => "Sepatu",
        "harga" => 200000,
        "jumlah" => 2
    ],
    [
        "nama" => "Ahmad",
        "barang" => "Minyak 1 L",
        "harga" => 140000,
        "jumlah" => 1
    ]
];

echo "<h2>TRANSAKSI 1</h2>";

$nama = $dataBelanja[0]["nama"];
$barang = $dataBelanja[0]["barang"];
$harga = $dataBelanja[0]["harga"];
$jumlah = $dataBelanja[0]["jumlah"];

$belanja1 = new BelanjaWarung();
$belanja1->namaPembeli = $nama;
$belanja1->namaBarang = $barang;
$belanja1->hargaBarang = $harga;
$belanja1->jumlahBeli = $jumlah;

$subtotal = $belanja1->hitungSubtotal();
$diskon = $belanja1->hitungDiskon($subtotal);
$total = $belanja1->hitungTotal();

echo "Pembeli : $belanja1->namaPembeli<br>";
echo "Barang : $belanja1->namaBarang<br>";
echo "Subtotal : ".formatRupiah($subtotal)."<br>";
echo "Diskon : ".formatRupiah($diskon)."<br>";
echo "<b>Total Bayar : ".formatRupiah($total)."</b><br><br>";

echo "<h2>TRANSAKSI 2</h2>";

$nama = $dataBelanja[1]["nama"];
$barang = $dataBelanja[1]["barang"];
$harga = $dataBelanja[1]["harga"];
$jumlah = $dataBelanja[1]["jumlah"];

$belanja2 = new BelanjaWarung();
$belanja2->namaPembeli = $nama;
$belanja2->namaBarang = $barang;
$belanja2->hargaBarang = $harga;
$belanja2->jumlahBeli = $jumlah;

$subtotal = $belanja2->hitungSubtotal();
$diskon = $belanja2->hitungDiskon($subtotal);
$total = $belanja2->hitungTotal();

echo "Pembeli : $belanja2->namaPembeli<br>";
echo "Barang : $belanja2->namaBarang<br>";
echo "Subtotal : ".formatRupiah($subtotal)."<br>";
echo "Diskon : ".formatRupiah($diskon)."<br>";
echo "<b>Total Bayar : ".formatRupiah($total)."</b><br>";
?>

