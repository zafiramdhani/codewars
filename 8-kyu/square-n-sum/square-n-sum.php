<!-- https://www.codewars.com/kata/515e271a311df0350d00000f/php -->

<?php

function square_sum($numbers) {
  return array_reduce($numbers, fn($acc, $curr) => $acc + ($curr * $curr), 0);
}

var_dump(square_sum([1, 2, 3]));