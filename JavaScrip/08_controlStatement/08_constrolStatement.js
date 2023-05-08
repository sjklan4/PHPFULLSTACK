//제어문


//----------------------
// 조건문(if, switch )
//----------------------
if( 1 > 0 ){
    console.log("1은 0보다 크다.");
} else if( 1 < 0 ){
    console.log("1은 0보다 작다.");
} else{
    console.log("기타 등등");
}

let u_age = 10;
switch ( u_age ) {
    case 20:
        console.log("20살");
        break;
    case 10:
        console.log("10살");
        break;

    default:
        console.log(u_age + "살");
        break;
}

//-----------------------------------------------------------------
// 반복문( while, do_while, for, foreach, for...in, for...of)
//-----------------------------------------------------------------
// let num = 0;
// while( num <= 3 ){
//     console.log(num);
//     num++;
// }



// console.log("2단");
// do {
//     console.log("2 X "+ num +" = " + 2 * num);
//     num++;
// } while (num <=9 );

// console.log("다른 2단")
// let dan = 2;
// let multi = 1;
// do {
//     console.log( dan + " * " + multi + " = " + (dan * multi));
//     multi++;
// } while ( multi <= 9 );

// for(let i = 0 ; i <= 9; i++){
//     console.log( dan + " * " + i + " = " +(dan * 1));
// }



// foreach : 배열만 루프 가능
// let arr = [1, 2, 3, 4];

// arr.forEach( function( val ){
//     console.log( val );
// });

arr = {
    u_name : "홍길동"
    ,u_age : 1
    ,u_title : "도술"
    ,u_level : 99
};
// for...in : 모든 객체를 루프 가능 - 키값을 기준으로 동작 
for( let i in arr ){
    console.log( i + " : " + arr[i] );
} 


// arr = [5, 4, 3, 2 ];
// arr.num = 2;
// //for...of : 
// for(let i of arr){
//     console.log( i );
// }