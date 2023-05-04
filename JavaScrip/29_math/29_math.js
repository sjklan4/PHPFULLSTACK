console.log( Math.ceil(3.33));
console.log( Math.round(3.5));
console.log( Math.floor(3.8));

//random() : 0이상 ~ 1미만 의 수를 랜덤으로 가져옴
console.log( Math.random());

// random() 매소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.

let n = 45;
let randomnum = new Set();
while (randomnum <5 ){
    let randomnum = Math.floor(Math.random()*n)+1;
    randomnum.add(randomnum);

};
randomnum.forEach(number => console.log(number));