<?php

class Mahasiswa {
    // Properti class
    public $nama;
    public $kelas;
    public $matkul;
    public $nilai;

    // Constructor untuk memasukkan data saat objek dibuat
    public function __construct($nama, $kelas, $matkul, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    // Method (fungsi di dalam class) untuk menentukan kelulusan
    public function cekKelulusan() {
        return ($this->nilai >= 60) ? "Lulus Kuis" : "Tidak Lulus Kuis";
    }

    // Method untuk menampilkan data secara rapi
    public function tampilkan() {
        echo "Nama : " . $this->nama . "<br>";
        echo "Kelas : " . $this->kelas . "<br>";
        echo "Mata Kuliah : " . $this->matkul . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo $this->cekKelulusan() . "<br><hr>";
    }
}

// Implementasi Array dari Objek
$daftarMahasiswa = [
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55)
];

// Menampilkan semua data
foreach ($daftarMahasiswa as $mhs) {
    $mhs->tampilkan();
}

?>