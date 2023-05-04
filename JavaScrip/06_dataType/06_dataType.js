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
    u_name: "홍길동" // u_name 만 뽑아올땐 obj1.u_name 하면 홍길동 만 뽑아온다.
    ,u_age : 30
    ,u_gender:"남자"
    , test :  function(){ // 익명 함수 로 사용시 함수 선언문 앞에 이름을 별도로 지정 obj1.test()식으로 사용
        console.log(" 객체 함수 test")
    }
    ,addr:{ //obj1.addr.addr1으로 각각 위치를 찾아 갈 수 있다.
        addr1 : "대구"
        ,addr2 : "중구"
        ,addr3 : "수성구"
    }
}

// 배열 (Array)
let arr = ["탕수육","짜장면","짬뽕"];
