<?php

$a = 5;
$b = 10;

// Memeriksa apakah variabel a dan b memiliki nilai yang sama
if ($a == $b) {
    // Jika sama, tampilkan nilai dari variabel a
    echo "Kedua variabel sama, nilai: $a\n";
} else {
    // Jika tidak sama, tampilkan angka terbesar di antara keduanya
    $angkaTerbesar = ($a > $b) ? $a : $b;
    echo "Kedua variabel berbeda, angka terbesar: $angkaTerbesar\n";
}
?>