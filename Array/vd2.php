<?php
function findMin($arr){
    $min = $arr[0];
    foreach($arr as $val){
        if($val<$min){
            $min = $val;
        }
    }
    return $min;
}
$numbers = [1,2,5,4,3];
$min = findMin($numbers);
echo " The smalest number is :" .$min;
?>