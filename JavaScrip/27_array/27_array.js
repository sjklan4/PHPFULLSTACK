let arr = [1, 2, 3, 4, 5];


// push() 매소드 : 배열에 값 추가 - arr[]이 방식으로 하게 되면 중간에 없는 임의 방을 만드는 문제가 발생
arr.push(6);

// delete arr[5] = 방안의 값을 지우고 방은 그대로 둔다는 문제점 발생(인덱스는 남아 있다.)
// 배열의 값 삭제
// delete arr[5];

// splice() 매소드 : 배열의 요소를 삭제 또는 교체<신중하게 써야 된다.> ex - arr.splice(3,1):첫번째는 방 두번째는 그 방부터 몇개까지 설정
// arr.splice(2,0,3) = 교체 방법 앞에 방의 값을 삽입시킨다. - 중간에 값이 숫자가 들어오면 그 숫자 값만큼 빠지고 교체
arr = [1, 2, 3, 4, 5];
arr.splice(2,1); // 배열에서 arr[2]가 삭제
arr.splice(2, 0, 3); //배열의 arr[2]뒤에 값을 3을 추가
arr.splice(2, 1, 3); // 배열의 arr[2]의 값을 3으로 변경
arr.splice(2, 1, 3, 5, 6, 7); // 3번째 매개변수부터는 가변파라미터로 모든 값을 추가
// 결론 : 위 splice 구문은 내가 원하는 자리의 값을 원하는 수만큼 지정해서 삭제 또는 변경 시키는 역활을 한다.

// indexOf() 매소드 : 배열에서 특정 요소를 찾는데 사용 - 찾으려는 값을 설정하면 그 값의 방번호를 찾아준다.
let arr2 = [1, 2, 3, 4, 5];
arr2 = [1, 2, 3, 4, 6, 6, 7, 8];
arr2.lastIndexOf(6);

//예제 - 아래 문장을 각각 점단위로 나눠서 출력해주세요
// let fileName = 'javascript.log.php';
// fileName = 'tttt.aa.bb';
// console.log(fileName.slice(0,9));
// console.log(fileName.slice(11,14));
// console.log(fileName.slice(15,18));

// console.log(fileName.slice(fileName.indexOf("j"),9));
// console.log(fileName.slice(fileName.indexOf("l"),fileName.lastIndexOf(".")));
// console.log(fileName.slice(fileName.lastIndexOf(".")+1,fileName.lastIndexOf("p")+1));

// let num1 = fileName.indexOf('.');
// let num2 = fileName.lastIndexOf('.');
// console.log(fileName.slice(0,num1));
// console.log(fileName.slice(num1+1,num2));
// console.log(fileName.slice(num2+1));

// const first_dot = fileName.indexOf('.');
// const last_dot = fileName.lastIndexOf('.');
// const first_str = fileName.slice(0, first_dot);
// const middle_str = fileName.slice(first_dot +1, last_dot);
// const last_str = fileName.slice(last_dot + 1);
// console.log(first_str);
// console.log(middle_str);
// console.log(last_str);


// let fileParts = fileName.split('.');
// for(let part of fileParts){
//     console.log(part);
// }

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환 = 기준배열을 기준으로 뒤에 붙어서 온다.
// let arrcon1 = [1, 2, 3];
// let arrcon2 = [10, 20, 30];
// let arrcon4 = [100, 200, 300];
// let arrcon3 = arrcon1.concat( arrcon2, arrcon4 );
// console.log( arrcon3 );

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별,  return true/flase
// let arrInc = [1, 2, 3, 4];
// console.log( arrInc.includes( 7 ));

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환 -
const arrSort = [6, 3, 5, 62, 51, 30, 61, 46, 120];
arrSort.sort((a, b) => a - b); // 오름차순 정렬
arrSort.sort( function(a , b){
    return a - b;
})
arrSort.sort((a, b) => b - a); // 내림차순 정렬

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열 만들어 준다. - 빈 문자열을 넣으면 구분 표시 없이 합쳐준다. 그외 필요한 구분자를 넣으면 그 구분자로 나눠준다.
const arrJoin = ["안녕", "하세", "요"];
arrJoin.join(); // '안녕,하세,요;
arrJoin.join(''); // '안녕하세요'
arrJoin.join('/'); // '안녕/하세/요'

// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는 지 판별 - 배열의 값을 검사 하는? 느낌
const arrEvery = [1, 2, 3, 4, 5];
// let result = 
//     arrEvery.every( function( val ){
//         return val <= 5;
// });
// console.log(result);

// 모든 요소를 2로 나눈 나머지가 0인지 판별해주세요 ('=>' 는 return을 의미한다.) 
// let result1 = arrEvery.every( function(val){
//     return val % 2 === 0 ;
// } )
// console.log(result1);

// arrEvery.every((val) => val % 2 === 0);

//some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는 지 판별
const arrSome = [1, 2, 3, 4, 5];
let result2 = arrSome.some( val => val >= 5 );
// console.log( result2 );

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result3 = arrFilter.filter(val => val >= 3 );
console.log(result3);

