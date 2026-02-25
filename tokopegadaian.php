<?php
$pinjaman = 1000000;
$pinjaman = 10;
$bunga = 10;
$lama = 5;
$terlambat = 40;
$totalPinjaman = $pinjaman + ($pinjaman *$bunga / 100);
$angsuran = $totalPinjaman /$lama;
$denda = 0.0015 * $terlambat;
$totalBayar = $angsuran + $denda;