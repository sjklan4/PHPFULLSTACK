<?php
// "I am always Hello." 에서 "Hello"를 "Happy"로 바꾸어서 출력

// printf("I am always %s.","Happy");


// function wr($word)
// {
//     if(mb_substr($word,13,6) == "Hello.")
//     {
//         mb_substr($word,13,6) = "Happy.";

//     }
//     echo $word;
// }

// $wrf = "I am always Hello.";
// wr($wrf);


function my_str_replace($str_all, $re1, $re2)
{
    $str_expl = explode($re1,$str_all);
    $result_str = implode($re2,$str_expl);
    return $result_str;
}

$str_old = "I am always Hello.";

echo my_str_replace($str_old, "always", "dieikd");


//printf("ERRPR(%d) : %s ERROR가 발생했습니다.","1","시스템");
// $arr_expl = explode(",", $str_expl);

// function my_str_replace($str, $old_word, $new_word)
// {
//     $str_expl = explode($old_word, $str);
//     $result_str = implode($new_word, $str_expl);
//     return $result_str;
// }

// $str_all = "I am always Hello.";
// $new_str = my_str_replace($str_all, "Hello", "Happy");
// echo $new_str;




?>