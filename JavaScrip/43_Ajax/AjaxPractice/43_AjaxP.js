//https://picsum.photos

const url = "https://picsum.photos/v2/list?page=7&limit=5";
const body = document.getElementsByTagName
//------아래 fetch부터 구문은 데이터를 받아 오는 역활과 순서를 지정 해주고 있다.-------//
fetch(url) //받아온 api주소를 배열 값으로 요청 한다.(promise값으로 받아온다.)
    .then(res  => {return res.json()})//json값으로 받아와서 배열 값으로 사용 할 수 있도록 만들어 준다.
    .then(data => makeList(data))//data형식으로 받아 온다. 
    .catch(console.log);

function makeList(data){
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        tagImg.style.height = '200px';
        tagImg.style.width = '200px';
        document.body.appendChild(tagImg);
    });
}
