<!-- 
TITLE = Beginner Series #2 CLock
URL = https://www.codewars.com/kata/55f9bca8ecaa9eac7100004a/php

Clock shows h hours, m minutes and s seconds after midnight.
Your task is to write a function which returns the time since midnight in milliseconds.
-->

<!-- CODE STARTS HERE -->
<?php

function past($h, $m, $s) {
  return (($h * 3600) + ($m * 60) + $s) * 1000;
}

var_dump(past(0, 1, 1));
var_dump(past(1, 1, 1));
var_dump(past(0, 0, 0));