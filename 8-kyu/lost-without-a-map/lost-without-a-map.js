/* 
TITLE = Beginner - Lost Without A Map
URL = https://www.codewars.com/kata/57f781872e3d8ca2a000007e/javascript

Given an array of integers, return a new array with each value doubled.
*/

// CODE STARTS HERE
function maps(x){
  return x.map(v => v * 2);
}

console.log(maps([4, 1, 1, 1, 4]));