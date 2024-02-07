/* 
TITLE = Convert Number To Reversed Array Of Digits
URL = https://www.codewars.com/kata/5583090cbe83f4fd8c000051/javascript

Given a random non-negative number, you have to return the digits of this number within an array in reverse order.
*/

// CODE STARTS HERE
function digitize(n) {
  return Array.from(String(n), Number).reverse();
  // return String(n).split('').map(Number).reverse();
}

console.log(digitize(54321))
console.log(digitize(2024))