//1. 요소를 선택하는 방법
// 1-1. ID로 선택하는 방법
//      document.hetElementById();
const title = document.getElementById('title');

// 1-2. 태그명으로 요소를 선낵하는 방법
const li = document.getElementsByTagName('li');

//짜장 빨간색 , 탕수육 오렌지, 짬뽕 회색으로 
// li[0].style.color = 'red';
// li[1].style.color = 'orange';
// li[2].style.color = 'silver';

// 탕수육 , 볶음밥, 깐풍기는 배경색 녹색
// 짜장면, 짬뽕, 라조기는 배경색을 베이지색

// let n = li.length;
// for (let L = 0; L < n ; L++) {
//     if(L%2 === 0){
//         li[L].style.backgroundColor = 'beige';
//     }
//     else{
//         li[L].style.backgroundColor = 'green';

//     }
// }

// 3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none_li');

// 4. CSS 선택자로 요소를 선택하는 방법
// querySelector(): 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector('#title'); //모든 선택자를 가져 올수 있다.
const li2 = document.querySelector('.none_li');

const li3 = document.querySelectorAll('.none_li');

// 2. 요소 조작하기

//  2-1. 컨텐츠를 조작하는 방법
//  textContent : 순수한 텍스트 데이터를 전달 - 사용자가 작성한 모든것을 있는 그대로 전달, 이전의 태그들은 모두 제거
title.textContent = "바꿔본다";
// innerHTML : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
title.innerHTML;

// 요소에 속성을 추가 
const it = document.querySelector('#it');
// it.setAttribute('placeholder','셋어트리뷰트로 삽입');
// const it = document.getElementById('it');

// const aa = document.getElementById('aa')
aa.setAttribute('href', 'http://www.naver.com');

// 요소의 속성을 제거 - 화면상에서만 삭제하도록 하는 구문 : 직접적인 삭제가 아닌 간접 삭제.
it.removeAttribute('placeholder');

// 요소의 스타일링 - 해당 요소에 css속성명을 넣으면 된다.
// 인라인으로 스타일 추가
aa.style.textDecoration = 'none';
aa.style.color = 'skyblue';


// 클래스로 스타일 추가 - 가변 파라미터로 클래스가 삽입 된다.
aa.classList.add('aa1','aa2','aa3');

// 새로운 요소 만들기
// 요소 만들기 - html에 li를 하나더 만드는것과 같다.
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입 - 위에 만든 요소의 자식요소에 해당하는것중 가장 마지막에 추가
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(cli);

// 요소를 특정 위치에 삽입하는 방법
const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore( cli, zzam );

// const insert = document.getElementsByTagName('li')[2];
// insert.innerHTML = '황제용봉가물치탕';


// li[2]

// 해당 요소를 지우는 방법 - html상에 해당 요소를 삭제 시킨다.
// cli.remove();

// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고
// 배경 색상 수정 - 맞춰서
// const zzab = document.createElement('li');
// zzab.innerHTML = '잡채밥';
// const insert1 = document.querySelector('li:nth-child(7)');
// ul[0].insertBefore(zzab, insert1);

// const dongpa = document.createElement('li');
// dongpa.innerHTML = '동파육';
// const insert2 = document.querySelector('li:nth-child(8)');
// ul[0].insertBefore(dongpa, insert2);

const zzab = document.createElement('li');
zzab.innerHTML = '잡채밥';
const dongpa = document.createElement('li');
dongpa.innerHTML = '동파육';

const insser = li[6];
ul[0].insertBefore(zzab, insser);
ul[0].insertBefore(dongpa, insser);

let n = li.length;
for (let L = 0; L < n ; L++) {
    if(L%2 === 0){
        li[L].style.backgroundColor = 'beige';
    }
    else{
        li[L].style.backgroundColor = 'green';

    }
}