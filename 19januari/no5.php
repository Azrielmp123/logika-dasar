<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];


$mergedArray = array_merge($bil1, $bil2);


$uniqueArray = array_unique($mergedArray);


rsort($uniqueArray);


echo "Hasil: ";
foreach ($uniqueArray as $value) {
    echo $value . " ";
}
?>
