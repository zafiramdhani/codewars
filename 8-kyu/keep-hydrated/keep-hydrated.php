<!-- 
TITLE = Keep Hydrated!
URL = https://www.codewars.com/kata/582cb0224e56e068d800003c/php

Nathan loves cycling.
Because Nathan knows it is important to stay hydrated, he drinks 0.5 litres of water per hour of cycling.
You get given the time in hours and you need to return the number of litres Nathan will drink, rounded to the smallest value.
-->

<!-- CODE STARTS HERE -->
<?php

function litres(float $t): int {
  return floor($t * 0.5);
}

var_dump(litres(3));
var_dump(litres(6.7));
var_dump(litres(12.3));