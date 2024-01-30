<?php

//buatlah sebuah fungsi yg akan menghasilkan sebuah array dari banyak data yang dikirim berbentuk string nama nama jurusan.
//jika nama jurusan yg ada di panggil duplikat, maka yg dimasukan ke array hanya salah satunya saja (capslok)
//contoh pemanggilan argument nya : namafunc("PPLG", "HTL", "KLN", "PMN", "pplg"). maka akan menghasilkan array ////["PPLG","HTL", "KLN", "PMN"]


function createArray(...$jurusan){

    $jurusan = array_map('strtoupper', $jurusan);
    $uniqueJurusan = array_unique($jurusan);
    return $uniqueJurusan;

}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));

?>