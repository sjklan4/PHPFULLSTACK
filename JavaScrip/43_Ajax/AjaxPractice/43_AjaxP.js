//https://picsum.photos


// const url = "https://picsum.photos/v2/list?page=7&limit=5";
// const body = document.getElementsByTagName

function cpi(){
    const input_url = document.getElementById('input_url');
    const url = input_url.value;
    fetch(url) 
        .then(res  => {return res.json()})
        .then(data => makeList(data))
        .catch(console.log);
}


function makeList(data){
    const div = document.querySelector('div');
    div.innerHTML = '';
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        tagImg.style.height = '200px';
        tagImg.style.width = '200px';
        document.body.appendChild(tagImg);
    });
}
