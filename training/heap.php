<?php
/**
* 
* @param array $data, @param int $heapSize, @param int $index
*/
function MaxHeapify(&$data, $heapSize, $index) {
   $left = $index * 2 + 1;
   $right = $index * 2 + 2;
   $largest = 0;
 
   if ($left < $heapSize && $data[$left] > $data[$index])//親と子(左)のどちらが大きいか比較
      $largest = $left;
   else
      $largest = $index;
 
   if ($right < $heapSize && $data[$right] > $data[$largest])//親(または子(左)どちらか大きいほう)と子(右)のどちらが大きいか比較
      $largest = $right;
 
   if ($largest != $index)//親が子より小さい場合入れ替え
   {
      $temp = $data[$index];
      $data[$index] = $data[$largest];
      $data[$largest] = $temp;
 
      MaxHeapify($data, $heapSize, $largest);
   }
}
 
/**
* 
* @param array $data, @param int $count
*/
function HeapSort(&$data, $count, $k) {
   $heapSize = $count;
   //それぞれの親ノードが子ノードよりも大きくなるように並び替え→先頭が一番大きくなる
   for ($p = floor($heapSize / 2 - 1) ; $p >= 0; $p--)
   {
      MaxHeapify($data, $heapSize, $p);
   }
   // echo "-----------------------------------------------------------"."\n";
   // echo "1 COUNT : ".$heapSize."\n";
   // print_r($data);
   
   //先頭が一番大きいため、先頭のノードと一番後ろのノードを入れ替える。また先頭が大きくなるので入れ替える。これを繰り返す。
   for ($i = $count - 1; $i > 0; $i--)
   {
      // echo "2 COUNT before : ".$i."\n";
      // print_r($data);
      $temp = $data[$i];
      $data[$i] = $data[0];
      $data[0] = $temp;
 
      // echo "2 COUNT middle : ".$i."\n";
      // print_r($data);
      $heapSize--;
      MaxHeapify($data, $heapSize, 0);//0がポイント
      // echo "2 COUNT after : ".$i."\n";
      // print_r($data);
   }
   $array = array();
   for($i = count($data)-1; $i >= count($data) -$k; $i--){
      array_push($array, $data[$i]);
      echo $i;
   }
   print_r($array);
}
 
$array = array(1, 23, 12, 9, 30, 2, 50);
HeapSort($array,count($array), 3);
 
?>
