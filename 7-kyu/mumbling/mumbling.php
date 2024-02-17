<!-- 
TITLE = Mumbling
URL = https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/php

This time no story, no theory. The examples below show you how to write function accum:
Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.
-->

<!-- CODE STARTS HERE -->
<?php

function accum($s) {
  $arr = str_split($s);
  $indexes = range(1, strlen($s));
  $result =  array_map(fn($elem, $index) => strtoupper($elem) . str_repeat(strtolower($elem), $index - 1), $arr, $indexes);

  return implode('-', $result);
}

var_dump(accum('erg'));
var_dump(accum('ZpglnRxqenU'));