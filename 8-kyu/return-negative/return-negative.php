<!-- https://www.codewars.com/kata/55685cd7ad70877c23000102/php -->

<?php

function makeNegative($num) {
  return ($num <= 0) ? $num : -$num;
}

echo makeNegative(-5);
echo makeNegative(15);
echo makeNegative(0);