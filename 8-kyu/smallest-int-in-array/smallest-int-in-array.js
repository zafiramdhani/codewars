// https://www.codewars.com/kata/55a2d7ebe362935a210000b2/javascript

class SmallestIntegerFinder {
  findSmallestInt(args) {
    return args.reduce((acc, curr) => acc < curr ? acc : curr)

    // return Math.min(...args)
  }
}

const result = new SmallestIntegerFinder();
console.log(result.findSmallestInt([10, 2, 3]))