/* 
TITLE = Get The Middle Character
URL = https://www.codewars.com/kata/56747fd5cb988479af000028/javascript

You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.
#Examples:
Kata.getMiddle("test") should return "es"
Kata.getMiddle("testing") should return "t"
Kata.getMiddle("middle") should return "dd"
Kata.getMiddle("A") should return "A"
*/

// CODE STARTS HERE
function getMiddle(s) {
  const length = s.length;

  if (length % 2) {
    return s[Math.floor(length / 2)];
  } else {
    return s[length / 2 - 1] + s[length / 2]
  }
}

console.log(getMiddle('test'));
console.log(getMiddle('testing'));
console.log(getMiddle('A'));