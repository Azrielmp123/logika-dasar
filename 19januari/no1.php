<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belum_kompeten = [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $belum_kompeten[] = $nilai;
    }
}

echo "Kelompok Kompeten: ";
for ($i = 0; $i < count($kompeten); $i++) {
    echo $kompeten[$i] . " ";
}

echo "\nKelompok Belum Kompeten: ";
for ($i = 0; $i < count($belum_kompeten); $i++) {
    echo $belum_kompeten[$i] . " ";
}

?>
