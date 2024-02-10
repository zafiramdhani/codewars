/* 
TITLE = Beginner Series #2 CLock
URL = https://www.codewars.com/kata/55f9bca8ecaa9eac7100004a/javascript

Clock shows h hours, m minutes and s seconds after midnight.
Your task is to write a function which returns the time since midnight in milliseconds.
*/

// CODE STARTS HERE
function past(h, m, s){
  return ((h * 3600000) + (m * 60000) + (s * 1000))
}

console.log(past(0, 1, 1));
console.log(past(1, 1, 1));
console.log(past(0, 0, 0));