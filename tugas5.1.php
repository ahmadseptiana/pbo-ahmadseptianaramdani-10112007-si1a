<?php

// Input
$kartu_member = "ya"; // isi "ya" jika memiliki kartu member, "tidak" jika tidak
$total_belanja = 334000;

// Variabel diskon
$diskon = 0;

// Percabangan sesuai flowchart
if ($kartu_member == "ya") {

    if ($total_belanja > 100000) {
        $diskon = 15000;
    } else {
        if ($total_belanja > 50000) {
            $diskon = 5000;
        } else {
            $diskon = 0;
        }
    }

} else {

    if ($total_belanja > 100000) {
        $diskon = 5000;
    } else {
        $diskon = 0;
    }

}

// Menghitung total bayar
$total_bayar = $total_belanja - $diskon;

// Output
echo "Apakah ada kartu member: " . $kartu_member . "<br>";
echo "Total Belanjaan: Rp " . $total_belanja . "<br>";
echo "Diskon: Rp " . $diskon . "<br>";
echo "Total Bayar: Rp " . $total_bayar;

?>