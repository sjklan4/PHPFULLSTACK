// 인라인 이벤트 등록
// html파일의 11행, 13행 참조
onclick 

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com";
}

const tt = "우리는\"지구\"다.";

// addEventListener(eventType, function)방식
const btn2 = document.querySelector('#btn2');
// btn2.addEventListener('click', ()=>{location.href = 'http://www.daum.net';}); //동작, 주소 설정 = 이동 ():화살표  함수를 하기 위해서 비운다.
let newWindow = null;
btn2.addEventListener('click', () => {newWindow = open('http://www.daum.net', '','width=500 height=500');}); //팝업 창 열기 'newWindow'선언을 주어서 새창에서 열게 한다. 

//팝업창 닫기
const btn3 = document.getElementById('btn3');
btn3.addEventListener('click', () => {newWindow.close();});
// btn3.addEventListener('click', popUpClose(newWindow));

// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListener()로 등록한 이벤트의 인수(아규먼트)와 같은 인수(아규먼트)를 셋팅해야 삭제됩니다.
btn3.removeEventListener('click', () => {newWindow.close();})
// btn3.removeEventListener('click', popUpClose(newWindow));

// callback 함수
// function popUpClose(win){
//     win.close();
// }

// 이벤트 타입
// 1. 마우스 이벤트
// mouserdown  - 마우스가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1'); // classname으로 가져오면 class안에 있는 모든 요소를 가져오게 된다. 쿼리 셀렉터를 가지고오면 '.'을 사용해서 ID를 불러온다 
//div[0].addEventListener //특정 조건을 지정하기 위해서 div[0]을 준다. - classname으로 선언시 사용
div1.addEventListener('mousedown', () => alert('div1 클릭'));

// mouseenter : 마우스 포인터가 요소 안으로 진입 했을때
div1.addEventListener('mouseenter', () => alert('div1 진입'));
