<!-- 
TITLE = School Paperwork
URL = https://www.codewars.com/kata/55f9b48403f6b87a7c0000bd/php

Your classmates asked you to copy some paperwork for them. You know that there are 'n' classmates and the paperwork has 'm' pages.
Your task is to calculate how many blank pages do you need. If n < 0 or m < 0 return 0.
-->

<!-- CODE STARTS HERE -->
<?php

function paperwork(int $n, int $m): int
{
  if ($n < 0 || $m < 0) {
    return 0;
  }
  return $n * $m;
}

var_dump(paperwork(5, 5));
var_dump(paperwork(-5, 5));
var_dump(paperwork(5, -5));