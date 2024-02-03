// https://www.codewars.com/kata/56dec885c54a926dcd001095/javascript

function opposite(number) {
  return number >= 0 ? -number : Math.abs(number)
  // return -number
}

console.log(opposite(5))
console.log(opposite(-15))