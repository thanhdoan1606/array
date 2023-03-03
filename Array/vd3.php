<?php
function calculateSum($arr)
{
    $sum = 0;
    foreach ($arr as $val){
        $sum += $val;
    }
    return $sum;
}

$number = [1,2,5,4,3];
$sum = calculateSum($number);
echo "Tổng của dãy số là : $sum"  ;
?>