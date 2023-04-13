<?php
    // $get_post = $_GET;


    // echo $get_post['id']."<br>"
    //     // .$get_post['pw']."<br>"
    //     .$get_post['name']."<br>"
    //     .$get_post['birth_date']."<br>";
    
    // foreach ($get_post as $key => $value) {
    //     echo $key.":".$value."<br>";

    // }

    $method_post = $_POST;

    echo $method_post['id']."<br>"
        .$method_post['pw']."<br>"
        .$method_post['name']."<br>"
        .$method_post['birth_date']."<br>"
        .$method_post['lev']."<br>";


    foreach ($method_post as $key => $value) 
    {
        echo $key. " : ".$value."<br>";
        



    }





?>