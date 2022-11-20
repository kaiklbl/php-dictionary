<?php

function summe(int ...$a):int{
    return array_sum($a);
  }
  
  $erg = summe(1,'2',3.7);
  var_dump($erg);


?>