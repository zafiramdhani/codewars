<!-- 
TITLE = Square Every Digit
URL = https://www.codewars.com/kata/546e2562b03326a88e000020/php

Welcome. In this kata, you are asked to square every digit of a number and concatenate them.
For example, if we run 9119 through the function, 811181 will come out, because 9^2 is 81 and 1^2 is 1. (81-1-1-81)
Example #2: An input of 765 will/should return 493625 because 7^2 is 49, 6^2 is 36, and 5^2 is 25. (49-36-25)
Note: The function accepts an integer and returns an integer.
-->

<!-- CODE STARTS HERE -->
<?php

function square_digits($num): int {
  $arr = str_split(string: $num);
  $arr_map = array_map(fn($i) => $i ** 2, $arr);
  return join($arr_map);
}

var_dump(square_digits(3212));
var_dump(square_digits(2112));