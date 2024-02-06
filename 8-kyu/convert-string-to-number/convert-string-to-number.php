<!-- 
TITLE = Convert A String To A Number
URL = https://www.codewars.com/kata/544675c6f971f7399a000e79/php

We need a function that can transform a string into a number. What ways of achieving this do you know?
Note: Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.
-->

<!-- CODE STARTS HERE -->
<?php

function stringToNumber($str) {
  return intval($str);
}

var_dump(stringToNumber('2024'));