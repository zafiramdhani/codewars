<!-- 
TITLE = Vowel Count
URL = https://www.codewars.com/kata/54ff3102c1bad923760001f3/php

Return the number (count) of vowels in the given string.
We will consider a, e, i, o, u as vowels for this Kata (but not y).
The input string will only consist of lower case letters and/or spaces.
-->

<!-- CODE STARTS HERE -->
<?php

function getCount($str) {
  return strlen(preg_filter('/[^aiueo]/i', '', $str));
  // return preg_match_all('/[aiueo]/i', $str);
}

var_dump(getCount('abracadabra'));