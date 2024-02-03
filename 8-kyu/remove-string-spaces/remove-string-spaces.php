<!-- https://www.codewars.com/kata/57eae20f5500ad98e50002c5/php -->

<?php

function no_space(string $s): string {
  return str_replace(' ', '', $s);
}

var_dump(no_space('sdf asd f sadf asd f sadf ad sf'));