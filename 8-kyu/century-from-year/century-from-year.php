<!-- 
TITLE = Century From Year
URL = https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097/php

The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.
-->

<!-- CODE STARTS HERE -->
<?php

function centuryFromYear($year): int
{
  return ceil($year / 100);
}

var_dump(centuryFromYear(2024));
var_dump(centuryFromYear(200));
var_dump(centuryFromYear(89));