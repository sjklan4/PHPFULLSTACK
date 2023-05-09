<?php
define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("URL_WAY", DOC_ROOT. "Mini_project/db_source/practice_db.php");
include_once(URL_WAY);

function details_fnc(&$param_no){
    $sql = " SELECT "
        ." board_no "
        ." ,board_title  "
        ." ,board_contents "
        ." ,board_write_date "
        ." ,board_del_date "
        ." FROM "
        ." practice_board "
        ." WHERE "
        ." board_no = :board_no "
        ;

        $arr_prepare =
        array(
            ":board_no" => $param_no
            
        );

        $conn = null;
        try 
        {
            db_conn($conn);
            $stmt = $conn->prepare( $sql );
            $stmt->execute( $arr_prepare );
            $result = $stmt->fetchall();
        } 
        catch (Exception $e) 
        {
            return $e->getMessage();
        }
        finally
        {
            $conn = null;
        }
        return $result[0];
}

// var_dump(details_fnc($arr));

$arr_get = $_GET;
$result_info = details_fnc($arr_get["board_no"]);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <?php echo $result_info["board_no"]?><br>
    <?php echo $result_info["board_title"]?><br>
    <?php echo $result_info["board_contents"]?><br>
    <?php echo $result_info["board_del_date"]?><br>
</body>
</html>