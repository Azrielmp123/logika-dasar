<?php
       
     $usia = 17;


    if ($usia > 6 && $usia <= 12 ) {
        echo "10 jam";
    } elseif($usia > 12 && $usia < 18  ) {
        echo "8-9 jam";
    } elseif ($usia >= 18 && $usia < 40 ) {
        echo "7-8 jam";
    } else {
        echo "Rentang usia tidak valid.";
    }

    
?>
