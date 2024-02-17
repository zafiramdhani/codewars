/* 
TITLE = Mumbling
URL = https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/javascript

This time no story, no theory. The examples below show you how to write function accum:
Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.
*/

// CODE STARTS HERE
function accum(s) {
  return s.split('')
          .map((elem, index) => elem.toUpperCase() + elem.toLowerCase()
          .repeat(index))
          .join('-');
}

console.log(accum('erg'));
console.log(accum('ZpglnRxqenU'));