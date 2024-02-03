// https://www.codewars.com/kata/5715eaedb436cf5606000381/javascript

function positiveSum(arr) {
  return arr.filter(n => n !== -Math.abs(n)).reduce((acc, curr) => acc + curr, 0)
}

console.log(positiveSum([-1, 9, 55]))