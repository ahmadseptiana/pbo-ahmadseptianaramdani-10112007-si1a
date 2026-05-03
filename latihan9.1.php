<?php
class Kendaraan {
    var $merek;
    var $jmlroda;
    var $harga;
    var $warna;
    var $bhnbakar;
    var $tahun;

    // constructor
    function __construct($merek, $jmlroda, $harga, $warna, $bhnbakar, $tahun) {
        $this->merek = $merek;
        $this->jmlroda = $jmlroda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->bhnbakar = $bhnbakar;
        $this->tahun = $tahun;
    }

    // method status harga
    function statusHarga() {
        return ($this->harga > 50000000) ? "Mahal" : "Murah";
    }

    // method tampil data
    function tampil() {
        echo "Merek : $this->merek <br>";
        echo "Roda : $this->jmlroda <br>";
        echo "Harga : $this->harga <br>";
        echo "Warna : $this->warna <br>";
        echo "Bahan Bakar : $this->bhnbakar <br>";
        echo "Tahun : $this->tahun <br>";
        echo "Status : ".$this->statusHarga()."<br><br>";
    }
}

// objek
$kendaraan1 = new Kendaraan("Toyota Yaris", 4, 160000000, "Merah", "Premium", 2005);
$kendaraan2 = new Kendaraan("Honda Scoopy", 2, 13000000, "Putih", "Premium", 2004);
$kendaraan3 = new Kendaraan("Isuzu Panther", 4, 170000000, "Hitam", "Solar", 2003);

// tampilkan
$kendaraan1->tampil();
$kendaraan2->tampil();
$kendaraan3->tampil();
?>