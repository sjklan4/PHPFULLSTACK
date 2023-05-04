<?php
define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("URL_WAY", DOC_ROOT. "Mini_project/db_source/practice_db.php");
include_once(URL_WAY);

//----------------------------
// 함수명 : board_insert_fnc
// 기능 : 내용 삽입
// 파라미터 : Array     &$param_arr
// 리턴값 : 내용 
//----------------------------
function board_insert_fnc(&$param_arr) 
{
    $sql = 
        " INSERT INTO practice_board( "
        ."  ,board_title "
        ."  ,board_contents "
        ."  ,board_write_date "
        ."  ) "
        ." VALUES ( "
        ."  :board_title "
        ."  ,:board_contents "
        ."  ,NOW() "
        ." ) "
        ;

    $arr_prepare =
        array(
            ":board_title" => $param_arr["board_title"]
            ,":board_contents" => $param_arr["board_contents"]
        );

    $conn= null;
    try 
        {
            db_conn( $conn ); //PDO object 셋
            $conn->beginTransaction(); //Transaction 시작 : 데이터를 변경하기(insert, update, delete) 때문에 일련의 연산이 완료되면 commit 실패시 rollback을 통해서 데이터를 관리 하게 시킨다. 
            $stmt = $conn->prepare( $sql ); //statement object 셋팅
            $stmt->execute( $arr_prepare ); //DB request
            $result_cnt = $stmt->rowCount(); // 업데이트 되서 영향을 받은 행의 숫자를 가져온다.
            $conn->commit();
        } 
        catch ( Exception $e) 
        {
            $conn->rollback(); // 트랜잭션이 진행중에 오류가 나면 롤백을 시켜서 돌려 준다.
            return $e->getMessage();
        }
        finally //성공여부와 상관없이 null로 커넥션을 초기화 시켜준다.
        {
            $conn = null;
        }
     //비정상 작동시 try문에서 finally를 실행시키고 catch 문의 값을 리턴시킨다. 그러나 정상 작동시 finally가 작동하고 return을 시킨다. 
        return $result_cnt;    

}


$http_method = $_SERVER["REQUEST_METHOD"];
if ( $http_method === "POST") 
{
    $arr_post = $_POST;
    $insert_result = board_insert_fnc($arr_post);
}


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method ="POST" action="practice_insert.php">

    
    </form>
</body>
</html>