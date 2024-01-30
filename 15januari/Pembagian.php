<?php

$angka1 = 9;
$angka2 = 2;

echo "Bilangan $angka1 Dibagi $angka2 <br>";

$result = $angka1 / $angka2;

echo "Hasil pembagian: " . $result;


if ($result == round($result)) {
    echo " (tanpa pembulatan)";
} else {
    $result = round($result);
    echo "<br>Hasil pembulatan: " . $result;
}
?>