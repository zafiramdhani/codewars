<!-- 
TITLE = Beginner - Lost Without A Map
URL = https://www.codewars.com/kata/57f781872e3d8ca2a000007e/php

Given an array of integers, return a new array with each value doubled.
-->

<!-- CODE STARTS HERE -->
<?php

function maps($x) {
  return array_map(fn($v) => $v * 2, $x);
}

var_dump(maps([4, 1, 1, 1, 4]));