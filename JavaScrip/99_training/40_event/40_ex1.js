// 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다.
// "안녕하세요."
//"숨어 있는 div를 찾아보세요."


// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
    //"두근두근"

// 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀌어 나타납니다.

// 4. 3번의 상태에서 다시 한번더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 됩니다.
    //"다시 숨는다."
const bt1 = document.getElementById('bt1');
bt1.addEventListener('click', () => alert("안녕하세요.\n숨어 있는 div를 찾아보세요."));
const hidden_sq = document.getElementById('hidden_sq');
hidden_sq.style.opacity = '0.5';
hidden_sq.addEventListener('mouseenter', function(){
    if(hidden_sq.style.opacity ==='0.5'){
        alert("두근두근")}
    });

// hidden_sq.addEventListener('mouseenter', () => alert("두근두근"));

    hidden_sq.addEventListener('click', function(){
        randnumX = Math.floor(Math.random()*100);
        randnumY = Math.floor(Math.random()*100);
        
        if(hidden_sq.style.opacity === '1')
                {
                    alert("다시 숨는다.");
                    hidden_sq.style.opacity = '0.5';
                    hidden_sq.style.top = randnumX + '%';
                    hidden_sq.style.left = randnumY + '%';
                }
                else
                {
                    alert("들켰다!");
                    hidden_sq.style.opacity = '1';
                }
    })

