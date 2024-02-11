<!-- 
TITLE = Highest And Lowest
URL = https://www.codewars.com/kata/554b4ac871d6813a03000035/php

In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.
Examples :
highAndLow("1 2 3 4 5");  // return "5 1"
highAndLow("1 2 -3 4 5"); // return "5 -3"
highAndLow("1 9 3 4 -5"); // return "9 -5"
-->

<!-- CODE STARTS HERE -->
<?php

function highAndLow($numbers)
{
  $arr = preg_split('/\s+/', $numbers);
  return max($arr) . ' ' . min($arr);
  // explode(' ', $numbers);
}

var_dump(highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4"));