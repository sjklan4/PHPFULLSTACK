// 타이머 함수

// //1. setTimeout() / clearTimeout()
// const tiemOut = setTimeout(() => console.log('A'), 2000); //타이머 셋팅

// clearTimeout(tiemOut); // 타이머 제거

// // 2. setInterval() / clearInterval()

// const myInterval = setInterval(() => console.log('A'), 1000); //1초마다 계속 반복
// clearInterval(myInterval); // 인터벌 제거

// 1 ~ 5 를 1초마다 콘솔에 출력해 주세요.(숫자 연속찍기)
// 1
// 2
// ..................


// let count = 0;
// const timenum = setInterval(()=> console.log(++count), 1000);

// setTimeout(function(){
//     clearInterval(timenum);    
// }, 5000);

// let i = 1;
// const interval1 = setInterval(() => {
//     console.log(i);
//     if(i++ === 5) {
//         clearInterval(interval1);
//     }
// },1000);

const clock = document.querySelector(".time_clock");
function getTime(){
let today = new Date();   
let hours = today.getHours(); // 시
let minutes = today.getMinutes();  // 분
let seconds = today.getSeconds();  // 초

clock.innerHTML = hours + ':' + minutes + ':' + seconds;
}

function init(){
    setInterval(getTime, 1000);
}
init();