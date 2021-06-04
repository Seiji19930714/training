<?php 
//二分探索の反復実装

function binarySearch($arr, $l, $r, $x) 
{ 
    while ($l <= $r) 
    { 
        $m = $l + ($r - $l) / 2; 
  
        // Check if x is present at mid 
        if ($arr[$m] == $x) 
            return floor($m); 
  
        // If x greater, ignore 
        // left half 
        if ($arr[$m] < $x) 
            $l = $m + 1; 
  
        // If x is smaller,  
        // ignore right half 
        else
            $r = $m - 1; 
    } 
  
    // if we reach here, then  
    // element was not present 
    return -1; 
} 
  
// Driver Code 
$arr = array(2, 3, 4, 10, 40); 
$n = count($arr); 
$x = 10; 
$result = binarySearch($arr, 0, $n - 1, $x); //1.配列, 2.配列の最初, 3.配列の最後, 4.探している数
if(($result == -1)) 
	echo "Element is not present in array"; 
else
	echo "Element is present at index ", $result; 
  
?> 
