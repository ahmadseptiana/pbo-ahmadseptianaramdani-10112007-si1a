<?php
// Class utama KalkulatorSuhu
class KalkulatorSuhu {
    private $nilai;
    private $dari;
    private $ke;

    // Constructor
    public function __construct($nilai, $dari, $ke) {
        $this->nilai = $nilai;   // operator penugasan (=)
        $this->dari  = $dari;
        $this->ke    = $ke;
    }

    // Method konversi suhu
    public function konversi() {

        // Operator perbandingan (==)
        if ($this->dari == $this->ke) {
            return $this->nilai;
        }

        // Konversi dari Celcius
        if ($this->dari == "C") {
            if ($this->ke == "F") {
                return ($this->nilai * 9/5) + 32;   // aritmatika (*, /, +)
            } elseif ($this->ke == "K") {
                return $this->nilai + 273.15;       // aritmatika (+)
            } elseif ($this->ke == "R") {
                return $this->nilai * 4/5;          // aritmatika (*, /)
            }
        }

        // Konversi dari Fahrenheit
        if ($this->dari == "F") {
            if ($this->ke == "C") {
                return ($this->nilai - 32) * 5/9;   // aritmatika (-, *, /)
            } elseif ($this->ke == "K") {
                return (($this->nilai - 32) * 5/9) + 273.15;
            } elseif ($this->ke == "R") {
                return ($this->nilai - 32) * 4/9;
            }
        }

        // Konversi dari Kelvin
        if ($this->dari == "K") {
            if ($this->ke == "C") {
                return $this->nilai - 273.15;
            } elseif ($this->ke == "F") {
                return (($this->nilai - 273.15) * 9/5) + 32;
            } elseif ($this->ke == "R") {
                return ($this->nilai - 273.15) * 4/5;
            }
        }

        // Konversi dari Reamur
        if ($this->dari == "R") {
            if ($this->ke == "C") {
                return $this->nilai * 5/4;
            } elseif ($this->ke == "F") {
                return ($this->nilai * 9/4) + 32;
            } elseif ($this->ke == "K") {
                return ($this->nilai * 5/4) + 273.15;
            }
        }

        return "Konversi tidak valid";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Suhu OOP</title>
</head>
<body>

<h2>Kalkulator Konversi Suhu (PHP OOP)</h2>

<form method="post">
    Nilai Suhu:
    <input type="number" name="nilai" step="any" required><br><br>

    Dari:
    <select name="dari">
        <option value="C">Celcius</option>
        <option value="F">Fahrenheit</option>
        <option value="K">Kelvin</option>
        <option value="R">Reamur</option>
    </select>

    Ke:
    <select name="ke">
        <option value="C">Celcius</option>
        <option value="F">Fahrenheit</option>
        <option value="K">Kelvin</option>
        <option value="R">Reamur</option>
    </select>

    <br><br>
    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
// Operator logika (&&) dan isset()
if (isset($_POST['hitung']) && !empty($_POST['nilai'])) {

    $nilai = $_POST['nilai'];
    $dari  = $_POST['dari'];
    $ke    = $_POST['ke'];

    $kalkulator = new KalkulatorSuhu($nilai, $dari, $ke);
    $hasil = $kalkulator->konversi();

    // Operator ternary (? :)
    $hasilTampil = is_numeric($hasil) ? round($hasil, 2) : $hasil;

    echo "<h3>Hasil Konversi: $hasilTampil °$ke</h3>";
}
?>

</body>
</html>

