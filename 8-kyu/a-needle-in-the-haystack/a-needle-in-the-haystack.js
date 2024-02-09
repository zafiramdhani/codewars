/* 
TITLE = A Needle In The Haystack
URL = https://www.codewars.com/kata/56676e8fabd2d1ff3000000c/javascript

Can you find the needle in the haystack?
Write a function findNeedle() that takes an array full of junk but containing one "needle"
After your function finds the needle it should return a message (as a string) that says:
"found the needle at position " plus the index it found the needle
*/

// CODE STARTS HERE
function findNeedle(haystack) {
  const filtered = haystack.filter(v => v === 'needle');
  if (filtered.length) {
    return `found the needle at position ${haystack.indexOf(filtered[0])}`;
  }
}

console.log(findNeedle(['283497238987234', 'a dog', 'a cat', 'some random junk', 'a piece of hay', 'needle', 'something somebody lost a while ago']));