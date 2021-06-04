<?php 
//二分探索の再帰的実装
  
// $arr 配列、$l = 0, $r = 配列の最後のindex番号、$x = 探したい数
function binarySearch($arr, $l, $r, $x) 
{ 
	if ($r >= $l) 
	{ 
        $mid = ceil($l + ($r - $l) / 2); 
  
        if ($arr[$mid] == $x)  
            return floor($mid); 
  
        if ($arr[$mid] > $x)  
            return binarySearch($arr, $l, $mid - 1, $x); 
  
        return binarySearch($arr, $mid + 1, $r, $x); 
	} 

	return -1; //探している数が見当たらない
} 
  
// Driver Code 
$arr = array(2, 3, 4, 10, 40); 
$n = count($arr); 
$x = 10; 
$result = binarySearch($arr, 0, $n - 1, $x); //1.配列,2.配列の最初,3.配列の最後,4.探している数
if(($result == -1)) 
	echo "Element is not present in array"; 
else
	echo "Element is present at index ", $result; 
