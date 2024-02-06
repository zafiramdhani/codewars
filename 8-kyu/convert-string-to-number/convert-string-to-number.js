/* 
TITLE = Convert a String to A Number
URL = https://www.codewars.com/kata/544675c6f971f7399a000e79/javascript

We need a function that can transform a string into a number. What ways of achieving this do you know?
Note: Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.
*/

// CODE STARTS HERE
const stringToNumber = function(str){
  return Number(str)
  // return parseInt(str)
}

console.log(stringToNumber('2024'))