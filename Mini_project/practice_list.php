<?php
define("DOC_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/");
define("URL_WAY", DOC_ROOT. "Mini_project/db_source/practice_db.php");
include_once(URL_WAY);

function select_info_board()
{
    $sql = " SELECT " 
        ." board_no "
        ." ,board_title "
        ." ,board_contents "
        ." ,board_write_date "
        ." FROM "
        ." practice_board "
        ;
    
    $conn = null;
    try 
    {
        db_conn( $conn ); 
        $stmt = $conn->prepare( $sql );
        $stmt->execute();
        $result = $stmt->fetchall();

    } 
    catch ( Exception $e) 
    {
        return "Error: ". $e->getMessage();
        return null;
    }
    finally //성공여부와 상관없이 null로 커넥션을 초기화 시켜준다.
    {
        $conn = null;
    }
    return $result;
}

$result_info = select_info_board();


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
    <table>
    <thead>
        <tr>
            <th>글 번호</th>
            <th>제목</th>
            <th>작성일</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result_info as $value) 
        {
        ?>
            <tr>
                <td><a href="practice_detail.php?board_no=<?php echo $value["board_no"]?>"><?php echo $value["board_no"]?></a></td>
                <td><a href="practice_detail.php?board_no=<?php echo $value["board_no"]?>"><?php echo $value["board_title"]?></a></td>
                <td><a href="practice_detail.php?board_no=<?php echo $value["board_no"]?>"><?php echo $value["board_contents"]?></a></td>
                <td><?php echo $value["board_write_date"]?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
    <label id ="writ_btn"><a href="practice_insert.php"><button type = "button" id ="writ_btn">WRITE</button></a></label>
</body>
</html>