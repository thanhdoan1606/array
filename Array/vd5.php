<?php
function reverseArray($arr){
    $resulft = [];
    for($i = count($arr)-1;$i >= 0;$i-- ) {
        $resulft[] = $arr; 
    }
    return $resulft;
}

$numbers = [1,2,5,4,3];
$reverse = reverseArray($numbers);
echo "The reverse array is :".implode(", ",$numbers);
?>