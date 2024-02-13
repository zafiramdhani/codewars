<!-- 
TITLE = Descending Order
URL = https://codewars.com/kata/5467e4d82edf8bbf40000155/php

Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.
Examples:
Input: 42145 Output: 54421
Input: 145263 Output: 654321
Input: 123456789 Output: 987654321
-->

<!-- CODE STARTS HERE -->
<?php

function descendingOrder(int $n): int {
  $arr = str_split(strval($n));
  rsort($arr);

  return join($arr);
}

var_dump(descendingOrder(0));
var_dump(descendingOrder(15));
var_dump(descendingOrder(2024));