<?php
// $api_url = 'https://picsum.photos/v2/list?page=7&limit=5'; // 여기에 실제 API URL을 넣으십시오
// $data = file_get_contents($api_url);
// echo $data;

$api_url = 'https://picsum.photos/v2/list?page=7&limit=5'; // 여기에 실제 API URL을 넣으십시오
try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
} catch (Exception $e) {
    echo $e->getMessage();
}
var_dump($data);
// header('Content-Type: application/json');
echo $data;

?> 


