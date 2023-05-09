// setTimeout(function(){
//     console.log('A');
// }, 3000);

// setTimeout(function(){
//     console.log('B');
// }, 2000);

// setTimeout(function(){
//     console.log('C');
// }, 1000);

//1. 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.
    // setTimeout(() => {
    //     console.log('A');
    //     setTimeout(() => {
    //         console.log('B')
    //         setTimeout(() => {
    //             console.log('C')
    //         }, 1000);
    //     }, 2000);
    // }, 3000);


//2. promise를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.(promise를 함수로 등록해서 구형)
// promise는 지정한 순서에 따라 값이 또는 함수가 완료 되고 다음 순서의 값들을 차례로 실행하도록 순서를 잡아
// 주는 기능을 가진 것으로 전단계 함수가 완료가 되지 않으면 reject를 통해서 사용자에게 값을 반환 시켜준다.
// resolve가 되어야만 다음 순서를 진행한다. 
function myPromise(ms, value){
    return new Promise(resolve => {   // resolve안에 설정 값을 주고 then에 들어갈 값들을 전부 변수화 시켜서 출력을 시킨다.
        setTimeout(() => {
            resolve(console.log(value));
        }, ms);
    })
}
myPromise(3000, 'A') 
.then(() => myPromise(2000,'B'))
.then(() => myPromise(1000,'C'));

//  위 구문은 함수안에 변수를 선언시켜주고 선언된 변수를 가지고 promise안에서 처리하도록 하는 방식으로 
// ms, value라는 변수에 then 부분에서 입력할 변수들을 promise함수 안에서 선언해주고 그 변수들을 먼저 실행하고
// 다음 then들을 순서대로 실행하도록 한다. 


// function printA() {
//     return new Promise(resolve => {
//       setTimeout(() => {
//         console.log('A');
//         resolve();
//       }, 3000);
//     });
//   }
  
//   function printB() {
//     return new Promise(resolve => {
//       setTimeout(() => {
//         console.log('B');
//         resolve();
//       }, 2000);
//     });
//   }
  
//   function printC() {
//     return new Promise(resolve => {
//       setTimeout(() => {
//         console.log('C');
//         resolve();
//       }, 1000);
//     });
//   }
  
//   printA()
//     .then(printB)
//     .then(printC);