/* 
TITLE = Is n Divisible By x And y
URL = https://www.codewars.com/kata/5545f109004975ea66000086/javascript

Create a function that checks if a number n is divisible by two numbers x AND y. All inputs are positive, non-zero numbers.
*/

// CODE STARTS HERE
function isDivisible(n, x, y) {
  return n % x === 0 && n % y === 0 ? true : false
}

console.log(isDivisible(10, 1, 5));
console.log(isDivisible(10, 3, 7));