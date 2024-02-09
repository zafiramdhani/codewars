<!-- 
TITLE = Convert A Boolean To String
URL = https://www.codewars.com/kata/551b4501ac0447318f0009cd/php

Implement a function which convert the given boolean value into its string representation.
Note: Only valid inputs will be given.
-->

<!-- CODE STARTS HERE -->
<?php

function booleanToString($b) {
  return $b ? 'true' : 'false';
}

var_dump(booleanToString(true));
var_dump(booleanToString(false));