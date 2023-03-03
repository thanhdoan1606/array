<?php
function findMostFrequent($arr)
{
    $scount = array();
    foreach ($arr as $val) {
        if (isset($scount[$val])) {
            $scount[$val]++;
        } else {
            $scount[$val] = 1;
        }
    }
    $max = 0;
    foreach ($scount as $val) {
        if ($val > $max) {
            $max = $val;
        }
    }
    $resulft = array();
    foreach ($arr as $key => $val) {
        if ($val == $max) {
            $resulft[] = $key;
        }
    }
    return $resulft;
}

$number = [1,2,5,4,3,2,1,2,2];
$requent = findMostFrequent($number);
echo 'The most requent number are:' . implode(", " , $requent);
