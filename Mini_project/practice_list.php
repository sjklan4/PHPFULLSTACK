<?php
define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("URL_WAY", DOC_ROOT. "Mini_project/db_source/practice_db.php");
include_once(URL_WAY);

db_conn($conn);

function select_info_board()
{
    $sql = " SELECT " 
        ." board_no "
        ." ,board_title "
        ." ,board_write_date "
        ." FROM "
        ." practice_board "
        ;

        $arr_prepare =
		array(
			":board_no"	=> $param_no
		);
}










?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pracitce_list</title>
</head>
<body>
    
</body>
</html>