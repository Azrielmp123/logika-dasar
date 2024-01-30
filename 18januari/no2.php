<?php 
 
  $beratbadan = 44;
  $tinggibadan = 144/100;
  
  $imt = $beratbadan / ($tinggibadan* $tinggibadan);

  if($imt < 18.5){
      echo "berat badan kurang.";
  }elseif($imt > 18.5 && $imt < 22.9  ){
      echo "berat badan normal.";
  }elseif($imt >= 22.9 && $imt < 24.9){
      echo "berat badan lebih.";
  }elseif($imt > 25){
    echo "obesitas";
  }


?>