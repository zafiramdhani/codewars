function countSheeps(sheep) {
  const result = sheep.filter(v => v === true).length;
  return result;
}

console.log(countSheeps([true,true,true,false,true,true,true,true,true,false,true,false,true,false,false,true,true,true,true,true,false,false,true,true]))