<!-- https://www.codewars.com/kata/55d24f55d7dd296eb9000030/php -->

<?php

function summation($n) {
  $result = 0;
  for ($i = $n; $i >= 1; $i--) { 
    $result += $i;
  }
  return $result;
}

var_dump(summation(10));