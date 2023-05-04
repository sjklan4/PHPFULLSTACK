// 인라인 이벤트 등록
// html파일의 11행, 13행 참조
onclick 

// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function(){
    location.href = "http://www.google.com";
}

const tt = "우리는\"지구\"다.";