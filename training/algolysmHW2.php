<?php

$array1 = [9, 4, 2];//2, 4/ 9
$array2 = [7, 11, 1, 3];//1, 3, 7, 11
$k = 12;

$index3 = array_fill(3, 5, 2);

echo "----------------------------------------------";
print_r($index3);

// Sorting array input 1
quicksort($array1, 0, count($array1) - 1);//array1をソート

// Sorting array input 2
quicksort($array2, 0, count($array2) - 1);//array2をソート

findSmallestPair($array1, $array2, $k);

function findSmallestPair($array1, $array2, $k) {
    // Posible pairs can create is equal count($array1)*count($array2)
    if ($k > count($array1)*count($array2)) {
        echo "k pairs does not exist";
        return;        
    }

    // All indexes of array2 for every element of array1.
    // Iniitial with all values is 0.
    $index2 = array_fill(0, count($array1), 0);//配列の初期化　array1の個数分

    while ($k > 0) {
        // Initial min sum as maximum of integer
        $minSum = PHP_INT_MAX;
        $minIndex = 0;

        // Traverse for all elemetns in array1
        // Each elements in array1, find corresponding elements in array2
        // then store the minimun value of this pair.
        foreach ($array1 as $i => $value1) {
            // array1 = [
            //              0 => 2,
            //              1 => 4,
            //              2 => 9,
            //           ]
            // array1のすべての要素をトラバースし、array1の要素とarray2の現在の要素の合計がminSumよりも小さい
            if ($index2[$i] < count($array2) && ($value1 + $array2[$index2[$i]] < $minSum)) {
                // Store new minIndex
                echo "before minsum = ".$minSum."\n";
                echo "before value1 = ".$value1."\n";
                echo "before array2[".$index2[$i]."] = ".$array2[$index2[$i]]."\n";
                $minIndex = $i;
                // Update minimum of sum
                $minSum = $value1 + $array2[$index2[$i]];
                echo "after minsum = ".$minSum."\n";
            }
        }
        // Print the pair
        echo "[{$array1[$minIndex]}, {$array2[$index2[$minIndex]]}] "."\n"."\n";
        // Moving next element of array2
        $index2[$minIndex]++;

        // Decreasing k
        $k--;
    }
}

 
function partition(&$array, $left, $right) {
    $pivot = $array[($right + $left) / 2];
    $i = $left;
    $j = $right;
    while ($i <= $j) {
        while ($array[$i] < $pivot) $i++;
        while ($array[$j] > $pivot) $j--;
        
        if ($i <= $j) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
            $i++;
            $j--;
        }
    }
 
    return $i;
}
 
function quicksort(&$array, $left, $right) {
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array,$left,$pivotIndex -1 );
        quicksort($array,$pivotIndex, $right);
    }
}
