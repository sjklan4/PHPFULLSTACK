<?php
//5월 2일 보강 PDO class

$db_option = array(
        PDO::ATTR_EMULATE_PREPARES    => false //DB의 prepared statement 기능을 사용하도록 설정 
        ,PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION // PDO Exception을 Throws하도록 설정
        ,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // 가져오는 데이터의 형식을 연상배열로 가져오게(fetch) 하는것
    );

//php는 array()방식과 []방식 두가지 방식으로 배열을 선언 할 수 있다.



// 1. DB접속
$conn = new PDO( "mysql:host=localhost;dbname=board;charset=utf8mb4", "root", "root506", $db_option);
// new PDO( dns정보, 유저, 비밀번호, [옵션]);
//dns정보 : 선택하려는 db에 대한 여러 정보를 담고 있다. 




// 쿼리 작성
// $sql = " SELECT * FROM board_info ";

// // 해당 SQL로 DB 요청 하고, Statement객체를 방아옴 , 어떤 방식으로 값을 적용 시킬지를 결정하는 구문 : 지금은 sql 상황에 따라 prepare로 적용
// $stmt = $conn->query( $sql );

// // Statement객체의 정보를 fetch해서 연상배열로 가져옴
// $result = $stmt->fetchAll();

// var_dump($result);

//DB 파기
// $conn = null;

// $sql = " SELECT * FROM board_info where board_no = :board_no "; // prepare stmt 셋팅 준비 = ':'뒤에 셋팅 준비하려는 값을 넣는다.
// $arr_prepare = array(
//     ":board_no" => 1
// );
// $stmt = $conn->prepare( $sql ); // 해당 쿼리를 셋팅해서 Statement객체를 반환(받아옴) sql만 셋팅 - 데이터 요청 방식 보낼 준비
// $stmt->execute( $arr_prepare ); // 해당 prepared Statement 데이터를 이용해서 DB에 요청
// $result = $stmt->fetchAll(); // DB가 응답한 정보를 fetch해서 연상배열로 반환 - 데이터를 가져오는 방식 결정
// var_dump($result);
// $conn = null; // DB연결 파기

// $title = "PDO Class";
// $no = 1;
// $sql = " update board_info set board_title = :board_title WHERE board_no = :board_no ";
// $conn->beginTransaction(); //Transaction 시작
// $stmt = $conn->prepare($sql);
// $stmt->bindparam( ":board_title", $title, PDO::PARAM_STR ); //셋팅 하려는 prepare를 각각 따로 설정 하는 것으로 PDO에 어떤것을 지정 할지 정한다. - 현재 설정값이 참조함수 임으로 변수에 담아서 가져와야 한다.
// $stmt->bindParam( ":board_no", $no, PDO::PARAM_INT); //prepare Statement를 셋팅
// $stmt->execute(); //위에서 이미 셋팅 해주었음으로 별도로 표기 할것이 없다
// $conn->commit(); // commit : Transanction 종료

// $conn=null;

$sql = " INSERT INTO board_info ( "
    ." board_no "
    ." ,board_title "
    ." ,board_contents "
    ." ,board_write_date "
    ." ) "

    ." VALUES ( "
    ." :board_no "
    ." ,:board_title "
    ." ,:board_contents "
    ." , now() "
    ." ) "
    ;
    $arr_prepare = array(":board_no" => 10101, ":board_title" => "제목테스트전용", ":board_contents" => "제목테스트 중입니다." );

$conn->beginTransaction(); // 저장을 위한 과정을 실시 하기 위해 선언을 해주는 구문
$stmt = $conn->prepare( $sql );
$stmt->execute($arr_prepare);
$conn->commit();
$conn = null;