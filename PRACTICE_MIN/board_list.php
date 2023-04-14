<?php
    define('PATH_DOC_ROOT',$_SERVER["DOCUMENT_ROOT"]."/" );
    define('PATH_DOC',PATH_DOC_ROOT."PRACTICE_MIN/board_cnn.php"); //경로 파일의 상수 명은 일반 값으로 받는다(문자열로 받으면 안된다.)
    include_once ( PATH_DOC );

    
    // var_dump(PATH_DOC);
    
    // if (array_key_exists(["board_no"],$_GET)) 
    // {
    //     $result_page = $_GET["board_no"];
    // }
    // var_dump($result_page);


    $limit_num = 5;
    $offset_num = 1;
    $array_prepare =
    array(
        "limit"=>$limit_num
        ,"offset"=>$offset_num

    );
    $result_board_list =  board_list_fnc($array_prepare);
    // var_dump($result_board_list);
    $result_cnt = select_board_info_cnt();
    // var_dump ($result_cnt);
    $max_page = ceil((int)$result_cnt / $limit_num); // 마지막 페이지를 만들기위해서 result_cnt함수에서 레코드 전체 수를 limit_num로 나누어서 한 페이지에 들어 오는 레코드 수를 정해줌으로써 각페이지당 정한 레크드가 나오도록 한다.

?>




<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./board_list.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>글 번호</th>
                <th>제목</th>
                <th>작성일자</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($result_board_list as $value) 
                {
                ?>
                    <div class = "tr">
                        <tr>
                            <td><?php echo $value["board_no"] ?></td>
                            <td><?php echo $value["board_title"]?></td>
                            <td><?php echo $value["board_write_date"]?></td>
                        </tr>
                    </div>    
                    <tr>
                    </tr>
                <?php
                }
                ?>
                <!-- for문을 통해서 페이지 수를 나열해 주는데 max_page 수만큼 페이지 수가 뿌려지도록 만들어 준다.  -->
                <?php
                    for ($i=0; $i <= $max_page ; $i++) 
                    { 
                ?>
                    
                <?php
                    }
                ?>
        </tbody>
    </table>    
</body>
</html>