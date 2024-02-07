/* 
TITLE = Abbreviate A Two Word Name
URL = https://www.codewars.com/kata/57eadb7ecd143f4c9c0000a3/javascript

Write a function to convert a name into initials. This kata strictly takes two words with one space in between them.
The output should be two capital letters with a dot separating them.
It should look like this:
Sam Harris => S.H
patrick feeney => P.F
*/

// CODE STARTS HERE
function abbrevName(name){
  arr = name.split(' ');
  firstLetter = arr[0].split('').shift();
  secondLetter = arr[1].split('').shift();
  return `${firstLetter}.${secondLetter}`.toUpperCase();

  // return `${arr[0][0]}.${arr[1][0]}`;
  // return arr.map(i => i[0]).join('.').toUpperCase();
}

console.log(abbrevName('Izzafi ramdhani'));