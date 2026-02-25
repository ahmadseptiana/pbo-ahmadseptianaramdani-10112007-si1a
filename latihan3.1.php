<?php
class Kendaraan
{
public $jumlahRoda=4;
public $warna;
public $bahanBakar="Premium"
public $merek;
public $tahunPembuatan=2004;
public function statusHarga()
{
    if($this->harga>50000000)
    {
    $status="Harga Kendaraan Mahal";
    }
    else
    {
    $status="Harga Kendaraan Murah";
    }
    function statusSubsidi()
{
        if($this->$tahunPembuatan<2005&&bahanBakar=="premium")
            $status ="DAPAT SUBSIDI";  
    }
    else
    $status="TIDAK DAPAT SUBSIDI";
}
return $status;
}
}
//instansiasi kelas
$ObjekKendaraan = new Kendaraaan();//pembuatan objek dari kelas
echo "jumlahRoda :".$ObjekKendaraan->$jumlahRoda."<br/>";//proses
instansiasi pemanggilan variable
echo "Status Harga :".$ObjekKendaraan->$statusHarga();//proses
instansiasi/pemanggilan function dari kelas
echo "Status Subsidi :".$ObjekKendaraan1->statusSubsidi();
//Objek Kendaraan 2
$objekKendaraan2 = new Kendaraan();

$objekKendaraan2->harga =300000000;
// harga mahal
$objekKendaraan2->tahunPembuatan = 2015; // tahun baru tidak dapat subsidi
// echo "<br><br>";
// echo "Objek Kendaraan 2 <br>";
// echo "Status BBM: ".
// $objekKendaraan2->statusSubsidi():?>