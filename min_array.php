<?php
 $arr = [1,2,3,4,5,0];
// echo min($arr);
 $min = $arr[0];
 $position = null;
 for($i=0;$i<count($arr);$i++){
     if($min > $arr[$i]){
         $min = $arr[$i];
         $position = $i;
     }
 }
 echo " $min cua mang  tai vi tri $position";