<!-- https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0/php -->

<?php

function remove_char(string $s): string {
  return implode('', array_slice(str_split($s), 1, -1));
  // return substr($s, 1, -1);
}

echo remove_char('masbro');