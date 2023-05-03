let num = 100;
let arr = [];

for (let i = 1; i <= num; i++) {
    arr[i - 1] = i;
}


// let primeNumbers = arr.filter((n) => {
//     if (n <= 1) {
//         return false;
//     }
//     for (let i = 2; i * i <= n; i++) {
//         if (n % i === 0) {
//             return false;
//         }
//     }
//     return true;
// });

// console.log(primeNumbers);
// alert(primeNumbers);
let arr_f = arr.filter(
function (n) {
    if (n <= 1) {
        return false;
    }
    for (let i = 2; i < n; i++) {
      if (n % i === 0) {
        return false;
      }
    }
    return true;
  }
  )
console.log(arr_f);


const result = arr.filter(val => val % 2 === 0 );
const result1 = arr.filter(val => val % 2 === 1);