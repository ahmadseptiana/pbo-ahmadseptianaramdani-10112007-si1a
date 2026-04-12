<?php

class Employee {
    public $gaji;
    public $lamaKerja;

    public function __construct($gaji, $lamaKerja) {
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }
}

class Programmer extends Employee {
    public function hitungBonus() {
        if ($this->lamaKerja < 1) {
            return 0;
        } elseif ($this->lamaKerja <= 10) {
            return 0.01 * $this->lamaKerja * $this->gaji;
        } else {
            return 0.02 * $this->lamaKerja * $this->gaji;
        }
    }
}

class Direktur extends Employee {
    public function hitungBonus() {
        return (0.5 * $this->lamaKerja * $this->gaji) +
               (0.1 * $this->lamaKerja * $this->gaji);
    }
}

class PegawaiMingguan extends Employee {
    public $hargaBarang;
    public $stokTarget;
    public $stokTerjual;

    public function __construct($gaji, $lamaKerja, $hargaBarang, $stokTarget, $stokTerjual) {
        parent::__construct($gaji, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokTarget = $stokTarget;
        $this->stokTerjual = $stokTerjual;
    }

    public function hitungBonus() {
        $persen = ($this->stokTerjual / $this->stokTarget) * 100;

        if ($persen > 70) {
            return 0.10 * $this->hargaBarang * $this->stokTerjual;
        } else {
            return 0.03 * $this->hargaBarang * $this->stokTerjual;
        }
    }
}

// ================= DATA (NAMA DIGANTI) =================
$data = [
    ["nama"=>"Rizky","jabatan"=>"Programmer","gaji"=>5000000,"lama"=>12],
    ["nama"=>"Dina","jabatan"=>"Programmer","gaji"=>5000000,"lama"=>5],
    ["nama"=>"Salsa","jabatan"=>"Programmer","gaji"=>5000000,"lama"=>0],
    ["nama"=>"Agus","jabatan"=>"Direktur","gaji"=>5000000,"lama"=>12],
    ["nama"=>"Reza","jabatan"=>"Pegawai","gaji"=>5000000,"lama"=>12,"target"=>100,"terjual"=>80,"harga"=>100000],
    ["nama"=>"Putri","jabatan"=>"Pegawai","gaji"=>5000000,"lama"=>4,"target"=>100,"terjual"=>50,"harga"=>100000],
];

// ================= TABEL =================
echo "<table border='1' cellpadding='5' style='border-collapse:collapse'>";
echo "<tr>
<th>Nama</th>
<th>Gaji Pokok</th>
<th>Masa Kerja</th>
<th>Jabatan</th>
<th>Bonus/Tunjangan</th>
<th>Total Gaji</th>
</tr>";

foreach ($data as $d) {

    echo "<tr>";
    echo "<td>{$d['nama']}</td>";
    echo "<td>Rp " . number_format($d['gaji'],0,',','.') . "</td>";
    echo "<td>{$d['lama']} Tahun</td>";
    echo "<td>{$d['jabatan']}</td>";

    if ($d['jabatan'] == "Programmer") {
        $obj = new Programmer($d['gaji'], $d['lama']);
        $bonus = $obj->hitungBonus();
    }
    elseif ($d['jabatan'] == "Direktur") {
        $obj = new Direktur($d['gaji'], $d['lama']);
        $bonus = $obj->hitungBonus();
    }
    else {
        $obj = new PegawaiMingguan(
            $d['gaji'],
            $d['lama'],
            $d['harga'],
            $d['target'],
            $d['terjual']
        );
        $bonus = $obj->hitungBonus();
    }

    $total = $d['gaji'] + $bonus;

    echo "<td>Rp " . number_format($bonus,0,',','.') . "</td>";
    echo "<td>Rp " . number_format($total,0,',','.') . "</td>";
    echo "</tr>";
}

echo "</table>";
?>