/* 
TITLE = Century From Year
URL = https://www.codewars.com/kata/5a3fe3dde1ce0e8ed6000097/javascript

The first century spans from the year 1 up to and including the year 100, the second century - from the year 101 up to and including the year 200, etc.
*/

// CODE STARTS HERE
function century(year) {
  return Math.ceil(year / 100)
}

console.log(century(2024));
console.log(century(2000));
console.log(century(1705));
console.log(century(1900));
console.log(century(56551));
console.log(century(89));