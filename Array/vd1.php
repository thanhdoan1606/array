<?php
function findMax($arr)
{
    $max = $arr[0];
    foreach ($arr as $val) {
        if ($val > $max) {
            $max = $val;
        }
    }
    var_dump($arr[0]);
    return $max;
}

$number = [1, 2, 5, 4, 3];
$max = findMax($number);
echo "The largest number is : $max";
