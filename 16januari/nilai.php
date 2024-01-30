<?php

$mtk = 87;
$inggris = 85;
$indonesia = 87;
$nilaiMinimum = 85;

$total = $mtk + $inggris + $indonesia;
$rataRata = $total / 3;

if ($rataRata >= 85){
    echo "Anda kompeten: " . $rataRata . "<br>";
}else{
    echo "Anda belum kompeten: " . $rataRata . "<br>";
}

if ($rataRata > $nilaiMinimum){
    echo "Anda lulus: " . $rataRata . "<br>";
}else{
    echo "Anda tidak lulus: " . $rataRata . "<br>";
}

echo "Rata-rata nilai Matematika, Bahasa Inggris, dan Bahasa Indonesia adalah: " . $rataRata;

?>