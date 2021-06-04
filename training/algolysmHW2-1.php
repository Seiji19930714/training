<?php
 
// function partition1(&$array, $left, $right) {
//     $pivot = $array[($right + $left) / 2][0] + $array[($right + $left) / 2][1];
//     $i = $left;
//     $j = $right;
//     while ($i <= $j) {
//         while ($array[$i][0] + $array[$i][1] < $pivot) $i++;
//         while ($array[$j][0] + $array[$j][1] > $pivot) $j--;
        
//         if ($i <= $j) {
//             $temp = $array[$i];
//             $array[$i] = $array[$j];
//             $array[$j] = $temp;
//             $i++;
//             $j--;
//         }
//     }
 
//     return $i;
// }
// function quicksort1(&$array, $left, $right) {
//     if($left < $right) {
//         $pivotIndex = partition1($array, $left, $right);
//         quicksort1($array,$left,$pivotIndex -1 );
//         quicksort1($array,$pivotIndex, $right);
//     }
// }

// function combination($array1, $array2) {
//     $count1 = count($array1);
//     $count2 = count($array2);
//     $array3 = array();
//     for($i = 0; $i < $count1; $i++){
//         for($j = 0; $j < $count2; $j++){
//             array_push($array3,array($array1[$i], $array2[$j]));
//         }
//     }
//     return $array3;
// }

// $array1 = [9, 4, 2];
// $array2 = [7, 11, 1, 3];
// $k = 3;

// $array3 = combination($array1, $array2);
// quicksort1($array3, 0, count($array1)*count($array2)-1);
// for($i = 0; $i < $k; $i++){
//     print_r($array3[$i]);
// }

function changeAAA(&$char){//$char = 'aaa'
    $char = 'iii';
}

$aaa = 'aaa';
changeAAA($aaa);//実行後 $aaa = ''
echo $aaa;
