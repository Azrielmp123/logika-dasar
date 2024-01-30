<?php

$waktu1 = "19.00";

function ubahWaktu($waktu) {
    
    $jam = substr($waktu, 0, 2);
    $menit = substr($waktu, 3, 2);

    $jamp = ($jam < 12) ? 'AM' : 'PM';

    $jam = ($jam > 12) ? $jam - 12 : $jam;

    $waktuUbah = "$jam:$menit $jamp";

    return $waktuUbah;
}

$hasil = ubahWaktu($waktu1);                                   

echo "$hasil";



//$wak = 25.55

//echo $wak > 12 && $wak < 24 ? "mengubah waktu menjadi". $wak = $wak - 12.00 . "pm" : "mengubah waktu menjadi".$wak."am";