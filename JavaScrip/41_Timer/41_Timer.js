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


//아래 구문은 현재 시간 분 초 만을 가져 오는 구문이다.
const clock = document.querySelector(".time_clock"); //html과 연결하기 위해 쿼리 문으로 가져 왓다.

function getTime(){
let today = new Date();   
let hours = today.getHours(); // 시
let minutes = today.getMinutes();  // 분
let seconds = today.getSeconds();  // 초
// clock.innerHTML =  hours + ':' + minutes + ':' + seconds;

const clock2 = document.querySelector(".time_clock2");
clock2.innerHTML = today.toLocaleTimeString();

if(hours <= 12 && hours >= 6){
    clock.innerHTML = '오전 ' + hours + ':' + minutes + ':' + seconds;
}
else if(hours >= 12 && hours < 22){
    clock.innerHTML = '오후 ' + hours + ':' + minutes + ':' + seconds;
}
else if(hours >= 22 && hours <= 24){
    clock.innerHTML = '어서오세요 달밤 ' + hours + ':' + minutes + ':' + seconds;
}
else{
    clock.innerHTML ='새벽' + hours + ':' + minutes + ':' + seconds;
}
}

const clock_move = setInterval(getTime, 1000); //위에서 가져온 값을 F5번을 하지 않고도 계속 실행되도록 한다.

//-----아래 함수는 setInterval을 함수화 시킨 것이다. --------//
// function init(){
//     setInterval(getTime, 1000);
// }
// init();

const stop_btn = document.getElementById('stop_btn');
stop_btn.addEventListener('click',function(){
    clearInterval(clock_move);
});

const start_btn = document.getElementById('start_btn');
start_btn.addEventListener('click', function(){
        setInterval(getTime, 1000);
});