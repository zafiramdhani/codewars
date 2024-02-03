<!-- https://www.codewars.com/kata/5715eaedb436cf5606000381/php -->

<?php

function positive_sum($arr) {
  $filtered = array_filter($arr, fn($value) => $value >= 0);
  $reduced = array_reduce($filtered, fn($acc, $curr) => $acc + $curr);

  return $reduced;

  // return array_sum(array_filter($arr, fn($value) => $value >= 0));
}

echo positive_sum([1, 2, 3, -1]);