// https://www.codewars.com/kata/57a0e5c372292dd76d000d7e/javascript

function repeatStr (n, s) {
  return new Array(n).fill(s).join('')
  // return s.repeat(n)
}

console.log(repeatStr(5, 'Wow'))