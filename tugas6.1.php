<?php

class BangunRuang {

    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    // Constructor
    public function __construct($jenis, $sisi, $jari, $tinggi){
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    // Method menghitung volume
    public function hitungVolume(){

        switch($this->jenis){

            case "Bola":
                return (4/3) * pi() * pow($this->jari,3);
            break;

            case "Kerucut":
                return (1/3) * pi() * pow($this->jari,2) * $this->tinggi;
            break;

            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi,2) * $this->tinggi;
            break;

            case "Kubus":
                return pow($this->sisi,3);
            break;

            case "Tabung":
                return pi() * pow($this->jari,2) * $this->tinggi;
            break;

        }

    }

}

// Array data bangun ruang
$dataBangun = [
    ["Bola",0,7,0],
    ["Kerucut",0,14,10],
    ["Limas Segi Empat",8,0,24],
    ["Kubus",30,0,0],
    ["Tabung",0,7,10]
];

echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

// Perulangan
foreach($dataBangun as $data){

    $obj = new BangunRuang($data[0],$data[1],$data[2],$data[3]);

    $volume = $obj->hitungVolume();

    echo "<tr>
            <td>$obj->jenis</td>
            <td>$obj->sisi</td>
            <td>$obj->jari</td>
            <td>$obj->tinggi</td>
            <td>$volume</td>
          </tr>";
}

echo "</table>";

?>

