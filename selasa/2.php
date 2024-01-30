<?php

// Buatlah sebuah fungsi yang akan menghitung lembar uang rupiah.
//contoh : 140500  lembar rupiah : - Rp. 100.000 : 1
                                // - Rp. 20.000 :2
                                // - Rp. 500 : 1

function rupiah($number)
{
    $angka = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    $hasil = [];

    foreach ($angka as $nilai) {
        $lembar = floor($number / $nilai);
        $number %= $nilai;

        if ($lembar > 0) {
            $hasil["$nilai"] = $lembar;
        }
    }
     
    return $hasil;
}
$uang = 150000;
echo "Jumlah Uang " .$uang. " Dan Jika Dipecah:";
echo "<br>";
$lembarRupiah = rupiah($uang);

foreach ($lembarRupiah as $nilai => $lembar) {
    echo "Rp. $nilai : $lembar lembar ";
    
}