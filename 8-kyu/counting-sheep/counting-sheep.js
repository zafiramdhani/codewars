/* 
URL = https://www.codewars.com/kata/54edbc7200b811e956000556/javascript
DESC = Consider an array/list of sheep where some sheep may be missing from their place. We need a function that counts the number of sheep present in the array (true means present).
*/

// CODE STARTS HERE
function countSheeps(sheep) {
  const result = sheep.filter(v => v === true).length;
  return result;
}

console.log(countSheeps([true,true,true,false,true,true,true,true,true,false,true,false,true,false,false,true,true,true,true,true,false,false,true,true]))