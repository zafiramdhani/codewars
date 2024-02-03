<!-- https://www.codewars.com/kata/56dec885c54a926dcd001095/php -->

<?php

function opposite($n) {
  return $n > 0 ? -$n : abs($n);
}

echo opposite(5);
echo opposite(-10);