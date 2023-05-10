

//https://picsum.photos

// const url = "https://picsum.photos/v2/list?page=7&limit=5"; //api주소를 받아 온다.
// const body = document.getElementsByTagName
//------아래 fetch부터 구문은 데이터를 받아 오는 역활과 순서를 지정 해주고 있다.-------//
// fetch(url) //받아온 api주소를 배열 값으로 요청 한다.(promise값으로 받아온다.)
// .then(res  => {return res.json()})//json값으로 받아와서 배열 값으로 사용 할 수 있도록 만들어 준다.
// .then(data => makeList(data))//data형식으로 받아 온다. 
// .catch(console.log);

// function makeList(data){
//     data.forEach(item => {
//         console.log(item);
//         const tagImg = document.createElement('img');
//         tagImg.setAttribute('src', item.download_url);
//         tagImg.style.height = '200px';
//         tagImg.style.width = '200px';
//         document.body.appendChild(tagImg);
//     });
// }


// 버튼클릭시 이미지를 보여주고 다시 누르면 다른 이미지 
// url을 input에 넣어서 기입한 url의 이미지가 나오도록 실행 다른 url을 넣으면 그 url로 변경
// css로 이미지 설정값을 별도 설정

function input_url(){
    const input_ul = document.getElementById('input_url').value;
    return input_ul;
}

//api주소를 받아 온다.
//const body = document.getElementsByTagName
const imgBox = document.getElementById('imgBox');
function makeList(data){
    const div = document.querySelector('div');
    div.innerHTML= '';
  //imgBox.replaceChildren();
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        // tagImg.style.height = '200px';
        // tagImg.style.width = '200px';
        tagImg.classList.add('imge');
        imgBox.appendChild(tagImg);
    });
}

const url_function = async function(){
    const url = input_url();
    const res = await fetch(url);
    const data = await res.json();
    makeList(data);
}

// fetch(url) //받아온 api주소를 배열 값으로 요청 한다.(promise값으로 받아온다.)
// .then(res  => {return res.json()})//json값으로 받아와서 배열 값으로 사용 할 수 있도록 만들어 준다.
// .then(data => makeList(data))//data형식으로 받아 온다. 
// .catch(console.log);
const api_btn = document.getElementById('api_btn');
api_btn.addEventListener('click', url_function);

function dell(){
const div = document.querySelector('div');
div.innerHTML= '';
}
const del_btn = document.getElementById('del_btn');
del_btn.addEventListener('click', dell);

// const div = document.querySelector('div');
// div.innerHTML= ''; //innerHTML 특징이 기존 컨텐츠들을 지우고 다시 넣는다.

//https://picsum.photos/v2/list?page=7&limit=5