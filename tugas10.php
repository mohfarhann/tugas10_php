<?php

  $arr = array(1,3,8,2,5,7,4,0);

  print("Sebelum Sorting: <br>");
  print_r($arr);

  $arr = bubble_sort($arr);
  print("</br>Sesudah di Sorting(bubble_sort): <br>");
  print_r($arr);

  function bubble_sort($arr){
    sort($arr);
    $arrLength = count($arr);
    for($i = 0; $i < $arrLength; $i++){
        return $arr;
    }
  }

?>
