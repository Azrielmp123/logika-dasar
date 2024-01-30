<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];



foreach ($data as $ngaran) {
    $nama = $ngaran ['nama'];
    $tahun = $ngaran ['tahun'];
   if ( $tahun % 4 == 0 ) {
    echo $nama. "tahun kabisat" ."<br>";
   }else{
    echo $nama. "bukan tahun kabisat"."<br>";
   } 
}


?>
