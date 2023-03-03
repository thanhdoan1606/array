<?php
function mutipliesofThree($arr){
    $resulft = [];
    foreach($arr as $val){
        if ($val%3 ==0){
            $resulft[] = $val;
        }
    }
    return $resulft;
}
$number = [1,2,3,4,6,12,43,129];
$mutiplies = mutipliesofThree($number);
echo "Số chia hết cho 3 là :" . implode(", ",$mutiplies) ; 
?>