// console.log("안녕하세요. js파일입니다.","두번째");

//-----------------------------------------
//변수 선언
//-----------------------------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name ="홍길동";
// var u_name ="무천도사";
// u_name="갑돌이";
// console.log(u_name);

//let : 중복선언 불가능, 재할당 가능, 블록레벨 스코프 - 같은 스코프 안에서만
// let u_age = 20;
// u_age = 30;

// const :  중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// gender = "여자";

//---------------------------
// 스코프 - 사용 범위를 의미
//---------------------------

// 전역 스코프 : 전체 모든 영역에서 공용으로 사용하는 함수
// let u_name = "홍길동";   

// //함수 레벨 스코프 : 함수 안에서만 접근 가능한 변수
// function test()
// {
//     console.log(u_name);

//     let u_age = 30;
//     console.log(u_age);
// }

// //블록 레벨 스코프 : 중괄호 안에서 선언된 변수는 그 안에서만 사용 가능 
// function test1()
// {    let v_test1 = "함수 테스트1";
//     if(true){

//         var v_var1 = "var로 선언";
//     }
//     console.log(v_test1);
//     // console.log(v_var1);
// }

// -------------------------------------------
// 호이스팅(hoisting)
// -------------------------------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단 끌어 올려지는 것  - let : 은 호이스팅 불가능
console.log( hTest());
console.log("60 line : " + hTest() );

function hTest(){
    return "함수 : hTest";
}



var vartest = "var : var변수";
console.log("58 line : " + vartest);
// console.log("60 line : " + letTest );
// console.log("60 line : " + constTest );


let letTest = "let 변수";
const constTest = "const 상수";