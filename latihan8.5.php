<?php

class KonversiSuhu {
    public $celcius;

    // constructor
    function __construct($celcius){
        $this->celcius = $celcius;
    }

    function hitung(){
        echo "<h1>Konversi Suhu dari Celcius</h1>";
        // array hasil konversi
        $hasil = [
            "celcius" => $this->celcius,
            "reamur" => (4/5) * $this->celcius,
            "fahrenheit" => (9/5) * $this->celcius + 32,
            "kelvin" => $this->celcius + 273.15
        ];

        // perulangan + percabangan
        foreach($hasil as $key => $value){
            if($key == "celcius"){
                echo "suhu dalam celcius = $value derajat <br>";
            } elseif($key == "reamur"){
                echo "suhu dalam reamur = $value derajat <br>";
            } elseif($key == "fahrenheit"){
                echo "suhu dalam fahrenheit = $value derajat <br>";
            } else {
                echo "suhu dalam kelvin = $value derajat <br>";
            }
        }

        echo "<br/>Sekian konversi suhu yang bisa dilakukan";
    }
}

// input GET
$celcius = $_GET['suhu'];

// jalankan
$konversi = new KonversiSuhu($celcius);
$konversi->hitung();

?>