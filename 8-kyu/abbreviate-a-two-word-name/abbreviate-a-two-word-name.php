<!-- 
TITLE = Abbreviate A Two Word Name
URL = https://www.codewars.com/kata/57eadb7ecd143f4c9c0000a3/php

Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
The output should be two capital letters with a dot separating them.
It should look like this:
Sam Harris => S.H
patrick feeney => P.F
-->

<!-- CODE STARTS HERE -->
<?php

function abbrevName($name)
{
  $arr = explode(' ', $name);
  return strtoupper($arr[0][0] . '.' . $arr[1][0]);
  // return strtoupper(join('.', array_map(fn($i) => $i[0], $arr)));
}

var_dump(abbrevName('Izzafi ramdhani'));