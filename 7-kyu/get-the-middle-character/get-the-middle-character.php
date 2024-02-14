<!-- 
TITLE = Get The Middle Character
URL = https://www.codewars.com/kata/56747fd5cb988479af000028/php

You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.
#Examples:
Kata.getMiddle("test") should return "es"
Kata.getMiddle("testing") should return "t"
Kata.getMiddle("middle") should return "dd"
Kata.getMiddle("A") should return "A"
-->

<!-- CODE STARTS HERE -->
<?php

function getMiddle($text) {
  $len = strlen($text);

  if ($len % 2) {
    return $text[$len / 2];
  } else {
    return $text[$len / 2 - 1] . $text[$len / 2];
  }
}

var_dump(getMiddle('test'));
var_dump(getMiddle('testing'));
var_dump(getMiddle('A'));