
// DATE 
const NOW = new Date();

// getFullYear() :  연도만 가져오는 메소드
// console.log("연도 : " + (NOW.getFullYear()));

// // getMonth() : 월 을 가져오는 메소드( +1을 해야 현재 월과 같다)
// console.log("월 : " + (NOW.getMonth()+1));

// // getDay(): 요일을 가져오는 메소드(요일을 숫자로 가져 오는 형식 일요일 : 0 ~ 토요일 : 6)

// // const D = NOW.getDay();
// // switch (D) {
// //     case 0:
// //         console.log("일요일")
// //         break;
// //     case
// //         break;
// //     case 1 : 
// //         "월요일"
// //         break;
// //     case 2
// //         "화요일"
// //         break;
// //     case 3
// //         "수요일"
// //         break;
// //     case 4
// //         "목요일"
// //         break;
// //     case 5
// //         "금요일"
// //         break;
// //     case 6
// //         "토요일"
// //         break;

// // }
// console.log("요일 : " + (NOW.getDay()));

// // getDate() : 날짜를 가져오는 메소드
// console.log( "일 : " + NOW.getDate());

// //getTime() : 1970/01/01 기준으로 몇초가 지났는지 초를 가져온다.
// console.log("시간(Linux) : " + NOW.getTime());

// //getHours() : 시간을 가져오는 메소드
// console.log("시 : " + NOW.getHours());

// // getMinutes() : 분을 가져오는 메소드
// console.log("분 : " + NOW.getMinutes());

// // getSecond() : 초를 가져오는 메소드
// console.log("초 : " + NOW.getSeconds());

// // getMillseconds() : 밀리초를 가져오는 메소드
// console.log("밀리초 : " + NOW.getMilliseconds());

// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘 부터 몇일 전인지 출력해 주세요.
const now = NOW.getTime();
const laterNOW = new Date('2022-09-30');
const ldate = laterNOW.getTime();
const day = ( now - ldate);
const D_day = (day/86400000);
console.log(Math.floor(D_day)+ " : 일 ");