// https://www.codewars.com/kata/515e271a311df0350d00000f/javascript

function squareSum(numbers){
  numbers.map(n => n * n).reduce((acc, curr) => acc + curr, 0)
}

console.log(squareSum([1, 2, 2]))