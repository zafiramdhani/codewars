<!-- 
TITLE = Basic Mathematical Operations
URL = https://www.codewars.com/kata/57356c55867b9b7a60000bd7/php

Your task is to create a function that does four basic mathematical operations.
The function should take three arguments - op(string/char), val1(number), val2(number).
The function should return result of numbers after applying the chosen operation.
-->

<!-- CODE STARTS HERE -->
<?php

function basicOp($op, $val1, $val2)
{
  $result = 0;
  switch ($op) {
    case '+':
      $result = $val1 + $val2;
      break;
    case '-':
      $result = $val1 - $val2;
      break;
    case '*':
      $result = $val1 * $val2;
      break;
    case '/':
      $result = $val1 / $val2;
      break;
    default:
      null;
      break;
  }
  return $result;
}

var_dump(basicOp("+", 4, 7));
var_dump(basicOp("-", 15, 18));
var_dump(basicOp("*", 5, 5));
var_dump(basicOp("/", 49, 7));