<?php
function countOccurrences($arr,$target) {
    $scount = 0 ;
    foreach($arr as $val){
        if($val == $target){
            $scount++;
        }
    }
    return $scount;
}
$number = [1,2,4,5,3,4,2,6];
$occurences = countOccurrences($number,2);
echo 'Só lần xuất hiện của 2 là :' . $occurences;
?>