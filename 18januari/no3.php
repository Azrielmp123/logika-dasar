<?php

$nasi_goreng_harga = 15000;
$ayam_bakar_harga = 20000;
$nasi_kebuli_harga = 25000;
$aneka_jus_harga = 8000;
$es_teh_manis_harga = 3000;
$es_jeruk_harga = 5000;

$hari_ini = date('l');
$diskon_jumat = 0.05;
$diskon_senin = 0.02;

$nasi_kebuli_qty = 2;
$ayam_bakar_qty = 1;
$nasi_goreng_qty = 2;

$total_harga = 0;

$total_harga += $nasi_kebuli_harga * $nasi_kebuli_qty;

$total_harga += $ayam_bakar_harga * $ayam_bakar_qty;

$total_harga += $nasi_goreng_harga * $nasi_goreng_qty;

if ($hari_ini == 'Friday') {
    $total_harga -= $total_harga * $diskon_jumat;
} else {
    if ($hari_ini == 'Monday') {
        $total_harga -= $total_harga * $diskon_senin;
    }
}

echo "Total harga yang harus dibayar oleh Dani: Rp " . number_format($total_harga, 2);
?>