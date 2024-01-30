<?php
//mengecek ktp dan mencari umur
$tahun = 2008;
$tahun_ayeuna = 2024;
$salisih_tahun = $tahun_ayeuna - $tahun;

if ($salisih_tahun >= 17) {
    echo "Tahun kelahiran $tahun sudah memiliki KTP. Usia sekarang = $salisih_tahun";
} else {
    echo "Tahun kelahiran $tahun belum memiliki KTP. Usia sekarang = $salisih_tahun";
}