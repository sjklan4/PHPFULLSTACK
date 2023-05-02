//데이터 타입

//----------------------------
// 기본 테이터 타입
//-----------------------------
//숫자 (number)
let num = 1;
function test(){
    let num = 2;
    console.log("함수 : " + num);
}
console.log("전역 : " + num);

//문자(string)
let str = "안녕";

//불리언(boolean)
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼( symbol ) - 각각마다 의미를 따로 가지고 있다.
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");

//------------------------------
// 객체 타입 (JSON)
//------------------------------


let obj1 = {
    u_name: "홍길동"
    ,u_age : 30
    ,u_gender:"남자"
    , test :  function(){
        console.log(" 객체 함수 test")
    }
    ,addr:{
        addr1 : "대구"
        ,addr2 : "중구"
        ,addr3 : "수성구"
    }
}

// 배열 (Array)
let arr = ["탕수육","짜장면","짬뽕"];
