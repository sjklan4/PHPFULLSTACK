// `` 사용 방법
//const a = 'aa';
//const b = 'bb';

//console.log(`${a} 와 ${b}가 있습니다.`); // = aa 와 bb 가 있습니다. : 다음과 같이 변수의 값을 바로 사용하기 위한 것

// setTimeout(function(){
//     console.log('A');
// }, 3000);

// setTimeout(function(){
//     console.log('C');
// }, 2000);

// setTimeout(function(){
//     console.log('B');
// }, 1000);

// setTimeout(function(){
//     console.log('D');
// }, 500);


// setTimeout(function(){
//     console.log('A');
//         setTimeout(function(){
//                 console.log('B');
//                     setTimeout(function(){
//                         setTimeout(function(){
//                                 console.log('D');
//                             }, 500);
//                         console.log('C');
//                     }, 2000);
//         }, 1000);
// }, 3000);

// function mypromise(ms, value){
//     return new Promise(resolve => {
//         setTimeout(function(){
//             resolve(console.log(value));
//         },ms)
//     })
// }
// mypromise(3000, 'A')
//     .then(() => mypromise(1000,'B'))
//     .then(() => mypromise(2000,'C'))
//     .then(() => mypromise(500,'D'));

function goToSchool() {
    console.log("학교에 갑니다.");
};

function arriveAtSchool_asis() {
    setTimeout(function() {
        console.log("학교에 도착했습니다.");
    }, 1000);
};

function study() {
    console.log("열심히 공부를 합니다.");
};

// goToSchool();
// arriveAtSchool_asis();
// study();

// function school_promise(){
//     return new Promise(resolve => {
//         setTimeout(function() {
//             resolve(console.log("학교에 도착했습니다."));
//         }, 1000)
//     })
// }
// goToSchool();
// school_promise().then(function(){study();}); // ??then 안에 function을 사용시 ()를 붙이고 사용하는가?

function school_gogo(){
    return new Promise(resolve => {
        setTimeout(function() {
            resolve(console.log("학교에 도착했습니다."));
        }, 1000);
    })
}

goToSchool();
school_gogo().then(function(){study();});





// function school_promise(){
//     return new Promise((resolve, reject) => {
//         setTimeout(function() {
//             var status = Math.floor(Math.random()*2);
//             if(status ===1){
//                 resolve(console.log("학교에 도착했습니다."));
//             } else{
//                 reject("중간에 넘어졌다.")
//             }
//         }, 1000);
//     });
// }

// function cure(){
//     console.log("병원감");
// }

// goToSchool();
// school_promise().then(function(resolve){console.log(resolve);
//         study();
//     })
//     .catch(function(reject){
//         console.log(reject);
//         cure();
//     });
