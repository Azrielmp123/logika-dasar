<?php
    $nilai = 90; 
    $predikat = ($nilai >= 90) ? 'A' :
                (($nilai > 75) ? 'B' : 'C');

    echo $predikat;
?>