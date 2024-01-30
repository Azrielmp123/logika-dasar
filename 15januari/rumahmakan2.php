<?php

$diskon1 = 0.05;
$diskon2 = 0.07;
$diskon3 = 0.12; 
$batasDiskon1 = 100000;
$totalpembelian = 130000;
$hari = "selasa";

$diskon = 0;

if ($hari == "selasa") {
    if ($totalpembelian > $batasDiskon1) {
        $diskon += $diskon3;
        $jumlahdiskon3 = $totalpembelian * $diskon3;
        $totaldiskon3 = $totalpembelian - $jumlahdiskon3;
        echo "Hari Selasa, belanja di atas 100 ribu, dapat diskon 12%. Harga menjadi " . $totaldiskon3;
    } else {
        $jumlahdiskon2 = $totalpembelian * $diskon2;
        $totaldiskon2 = $totalpembelian - $jumlahdiskon2;
        $diskon += $diskon2;
        echo "Hari Selasa, dapat diskon 7%. Harga menjadi " . $totaldiskon2;
    }
} elseif ($totalpembelian > $batasDiskon1) {
    $diskon += $diskon2;
    echo "Bukan hari Selasa, belanja di atas 100 ribu, dapat diskon 7%.";
}


$totalDiskon = $totalpembelian * $diskon;
$hargaAkhir = $totalpembelian - $totalDiskon;

echo "<br>";
echo "Total diskon: " . ($diskon * 100) . "%";
echo "<br>";
echo "Harga akhir setelah diskon: " . $hargaAkhir;
?>
