<?php
function DB_conn( &$param_conn)
{
    $host = "localhost";
    $user = "root";
    $pass = "root506";
    $charset = "utf8mb4";
    $db_name = "prject_mini_boardproject";
    $dns = "mysql:host=".$host.";dbname=".$db_name.";charset=".$charset;
    $pdo_option =
        array(
            PDO::ATTR_EMULATE_PREPARES      => false
            ,PDO::ATTR_ERRMODE              => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC
        );

    try 
    {
        $param_conn = new PDO($dns, $user, $pass, $pdo_option);
    } 
    catch (Exception $e) 
    {
        $param_conn = null;
        echo "fall: ".$e->getMessage();
    }

}

function board_list_fnc(&$param_conn)
{
    $sql =
    " SELECT "
    ." board_no "
    ." ,board_title "
    ." ,board_write_date "
    ." FROM " 
    ." board_info "
    ." where "
    ." board_del_flg ='0' "
    ." ORDER BY "
    ." board_no " 
    ." DESC "
    ." LIMIT :limit "
    ." OFFSET :offset "
    ;

    $array_prepare =
            array(
                ":limit" => $param_conn["limit"],
                ":offset" => $param_conn["offset"]
            );

    $conn = null;
    try 
    {
        db_conn( $conn ); //데이터 베이스 연동이 유지가 되게 되면 다른 유저들이 접근을 할 수가 없어서 쿼리 연동시 항상 종료 하는 조건을 붙인다.
        $stmt = $conn->prepare( $sql );
        $stmt->execute( $array_prepare );
        $result = $stmt->fetchall();
    } 
    catch ( Exception $e) 
    {
        return $e->getMessage();
    }
    finally //성공여부와 상관없이 null로 커넥션을 초기화 시켜준다.
    {
        $conn = null;
    }
 //비정상 작동시 try문에서 finally를 실행시키고 catch 문의 값을 리턴시킨다. 그러나 정상 작동시 finally가 작동하고 return을 시킨다. 
    return $result;        
}


    function select_board_info_cnt()
    {
        $sql =  
        " SELECT "
        ." count(*) "
        ." FROM " 
        ." board_info "
        ." WHERE "
        ." board_del_flg = '0' "
        ;
        
        $array_prepare = array();


    $conn = null;
    try 
    {
        db_conn( $conn ); //데이터 베이스 연동이 유지가 되게 되면 다른 유저들이 접근을 할 수가 없어서 쿼리 연동시 항상 종료 하는 조건을 붙인다.
        $stmt = $conn->prepare( $sql );
        $stmt->execute( $array_prepare );
        $result = $stmt->fetchall();
    } 
    catch ( Exception $e) 
    {
        return $e->getMessage();
    }
    finally //성공여부와 상관없이 null로 커넥션을 초기화 시켜준다.
    {
        $conn = null;
    }
 //비정상 작동시 try문에서 finally를 실행시키고 catch 문의 값을 리턴시킨다. 그러나 정상 작동시 finally가 작동하고 return을 시킨다. 
    return $result;        

}

?>
