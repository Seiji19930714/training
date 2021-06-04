<?php 
function partition(&$array, $left, $right) {
    $pivot = $array[$right];
    $i = $left -1;
    echo "1. pivot = ".$pivot."\n";
    echo "1. left = ".$left."array[left] = ".$array[$left]."\n";
    echo "1. right = ".$right."array[right] = ".$array[$right]."\n";
    for ($j = $left; $j < $right; $j++) {
          if(($array[$j] < $pivot)){
            $i++;
            echo "1. before";
            print_r($array);
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            echo "1. after";
            print_r($array);
          }
    }
    echo "2. before";
    print_r($array);
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp;
    echo "2. after";
    print_r($array);
    return ($i + 1);
}

function quicksort(&$array, $left, $right) {
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        echo "sort at left"."\n";
        quicksort($array,$left,$pivotIndex -1 );//もともとpovotだった要素の左をpivotにして、pivotよりも左側のみで再び並び替え実行
        echo "sort at right"."\n";
        quicksort($array,$pivotIndex, $right);//一番左側の要素をpivotにして、もとのpivotよりも右側のみで再び並び替え実行
    }
}

// A utility function to 
// print an array of size n 
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 

$arr = array(8, 7, 6, 1, 0, 9, 2); 
$n = sizeof($arr); 
quicksort($arr, 0,count($arr) -1);
printArray($arr, $n); 
