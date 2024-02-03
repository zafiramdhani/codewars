// https://www.codewars.com/kata/55d24f55d7dd296eb9000030/javascript

var summation = function (num) {
  const arr = []
  for (let i = num; i >= 1; i--) {
    arr.push(i)
  }

  return arr.reduce((acc, curr) => acc + curr)
}

console.log(summation(10))