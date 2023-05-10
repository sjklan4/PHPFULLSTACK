
// function delay(){
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime){}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('C');



// function delay(){
//     return new Promise(function(resolve){
//         const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime){}
//         console.log('B');
//     });
// }
// console.log('A');
// delay();
// console.log('C');


// function delay(){
//     return new Promise(resolve => {
//         const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime){}
//         resolve('B');
//     });
// }

// console.log('A');
// delay().then( b => console.log(b));
// console.log('C'); 

// 실행시 딜레이가 발생하는 이유는 자바스크립트가 스텍구조로 되어 있어서 쌓여있는 실행 문들이 순서대로 
// 실행됨으로 인해서 딜레이가 발생한다.

// function delay(){
//     return new Promise(resolve => {
//        setTimeout(() => {
//         resolve('B');
//        }, 2000);
//     });
// }

// console.log('A');
// delay().then( b => console.log(b));
// console.log('C');

// async로 비동기 처리
// 설정한 함수를 먼저 실행 시키도록 대기 시킨다. - promise기반
// async function delay(){
//     const delayTime = Date.now() +2000;
//         while(Date.now() < delayTime){}
//         return 'B';
//     }

// console.log('A');
// delay().then( b => console.log(b));
// console.log('C');

//3.await : async가 붙은 함수안에서만 사용 가능 : async / await는 브라우져에게 해야될 내용들을 같이 보내주는 느낌으로
function myDelay(ms){
    return new Promise(resolve => setTimeout(resolve,ms)); //작업순서 : geta 실행시 settimeout은 브라우져로 작업을 보내 준다 > getb실행후 브라우져로 보낸다. > 브라우져는 가지고 있다가 시간이 지나면 다시 자바엔진으로 작업을 보내준다. 그러나 이미 전부 자바는 실행을 한걸로 보기 때문에 한꺼번에 출력

}

async function getA(){
    await myDelay(1000);
    return 'A';
}

async function getB(){
    await myDelay(3000);
    return 'B';
}
// 아래 방식은 단순 출력 위 지정 값을 기준으로 단순 출력이 진행
// getA()
// .then(strA => console.log(strA));
// getB()
// .then(strB => console.log(strB));

// promise방식 출력

// getA()
// .then(strA => { 
//     return getB().then(strB => console.log(`${strA} : ${strB}`))
// });

getA()
.then(() => console.log(getB));

// async를 이용할 경우

// async function getAll(){
//     const strA = await getA();
//     const strB = await getB();
//     console.log(`${strA} : ${strB}`);
// }


//위 내용 정리------------------------------------------------------------------------------------------------
// async는 promise 구문과 같은 방식으로 then을 이용해서 사용이 가능 하다.
// await를 사용 해서 async 를 사용하면 각각의 실행 값들에 대해서 설정을 주어서 사용 할 수있도록 만들 수 있다.
//----------------------------------------------------------------------------------------------------

//병렬 처리방법
// async function getAll1(){
//     Promise.all([getA(), getB()])
//     .then(all => console.log(all.join(' : ')));
// }

// getAll1();


//별도 예제 문제 확인!
// function sleep(ms) {
//     return new Promise(resolve => setTimeout(resolve, ms));
//   }
  
//   async function fetchData1() {
//     await sleep(1000);
//     return "데이터 1";
//   }
  
//   async function fetchData2() {
//     await sleep(2000);
//     return "데이터 2";
//   }
  
//   async function main() {
//     const data1 = await fetchData1();
//     console.log(data1);  // "데이터 1" 출력
  
//     const data2 = await fetchData2();
//     console.log(data2);  // "데이터 2" 출력
//   }
  
//   main();