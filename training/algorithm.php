<?php 
// PHP program to find minimum 
// element in a sorted and  
// rotated array 
//配列、0、要素数-1
function findMin($arr, $low, $high) 
{ 
    // This condition is needed 
    // to handle the case when  
    // array is not rotated at all 
    if ($high < $low) return $arr[0]; 
  
    // If there is only 
    // one element left 
    if ($high == $low) return $arr[$low]; 
  
    // Find mid 
    $mid = $low + ($high - $low) / 2; /*($low + $high)/2;*/
  
    // Check if element (mid+1) 
    // is minimum element.  
    // Consider the cases like  
    // (3, 4, 5, 1, 2) 
    if ($mid < $high &&  
        $arr[$mid + 1] < $arr[$mid]) 
    return $arr[$mid + 1]; 
  
    // Check if mid itself 
    // is minimum element 
    if ($mid > $low &&  
        $arr[$mid] < $arr[$mid - 1]) 
    return $arr[$mid]; 
  
    // Decide whether we need  
    // to go to left half or  
    // right half 
    if ($arr[$high] > $arr[$mid]) 
    return findMin($arr, $low,  
                   $mid - 1); 
    return findMin($arr, $mid + 1, $high); 
} 
  
// Driver Code 
$arr1 = array(5, 6, 1, 2, 3, 4); 
$n1 = sizeof($arr1); 
echo "The minimum element is " .  
    findMin($arr1, 0, $n1 - 1) . "\n"; 
  
// $arr2 = array(1, 2, 3, 4); 
// $n2 = sizeof($arr2); 
// echo "The minimum element is " .  
//     findMin($arr2, 0, $n2 - 1) . "\n"; 
  
// $arr3 = array(1); 
// $n3 = sizeof($arr3); 
// echo "The minimum element is " .  
//     findMin($arr3, 0, $n3 - 1) . "\n"; 
  
// $arr4 = array(1, 2); 
// $n4 = sizeof($arr4); 
// echo "The minimum element is " .  
//     findMin($arr4, 0, $n4 - 1) . "\n"; 
  
// $arr5 = array(2, 1); 
// $n5 = sizeof($arr5); 
// echo "The minimum element is " .  
//     findMin($arr5, 0, $n5 - 1) . "\n"; 
  
// $arr6 = array(5, 6, 7, 1, 2, 3, 4); 
// $n6 = sizeof($arr6); 
// echo "The minimum element is " .  
//     findMin($arr6, 0, $n6 - 1) . "\n"; 
  
// $arr7 = array(1, 2, 3, 4, 5, 6, 7); 
// $n7 = sizeof($arr7); 
// echo "The minimum element is " .  
//     findMin($arr7, 0, $n7 - 1) . "\n"; 
  
// $arr8 = array(2, 3, 4, 5, 6, 7, 8, 1); 
// $n8 = sizeof($arr8); 
// echo "The minimum element is " .  
//     findMin($arr8, 0, $n8 - 1) . "\n"; 
  
// $arr9 = array(3, 4, 5, 1, 2); 
// $n9 = sizeof($arr9); 
// echo "The minimum element is " . 
//     findMin($arr9, 0, $n9 - 1) . "\n"; 
?> 
