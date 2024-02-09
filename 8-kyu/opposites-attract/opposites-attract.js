/* 
TITLE = Opposites Attract
URL = https://www.codewars.com/kata/555086d53eac039a2a000083/javascript

Timmy & Sarah think they are in love, but around where they live, they will only know once they pick a flower each. If one of the flowers has an even number of petals and the other has an odd number of petals it means they are in love.
Write a function that will take the number of petals of each flower and return true if they are in love and false if they aren't.
*/

// CODE STARTS HERE
function lovefunc(flower1, flower2){
  const f1 = flower1 % 2;
  const f2 = flower2 % 2;
  return f1 !== f2;
}

console.log(lovefunc(2, 3));
console.log(lovefunc(4, 5));
console.log(lovefunc(1, 5));
console.log(lovefunc(4, 8));