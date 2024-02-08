<!-- 
TITLE = Returning Strings
URL = https://www.codewars.com/kata/55a70521798b14d4750000a4/php

Make a function that will return a greeting statement that uses an input; your program should return, "Hello, <name> how are you doing today?".
-->

<!-- CODE STARTS HERE -->
<?php

function greet($name) {
  return 'Hello, ' .$name. ' how are you going today?';
}

var_dump(greet('zafee'));