// https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0/javascript

function removeChar(str) {
  const arr = str.split('')
  arr.shift()
  arr.pop()

  return arr.join('')
  // return str.slice(1, -1)
};

console.log(removeChar('matamu'))