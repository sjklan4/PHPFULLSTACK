<?php
// $api_url = 'https://picsum.photos/v2/list?page=7&limit=5'; // 여기에 실제 API URL을 넣으십시오
// $data = file_get_contents($api_url);
// echo $data;

$api_url = 'https://picsum.photos/v2/list?page=1&limit=5';
$api_url = 'https://openapi.gg.go.kr/TBGGSTATNELVM?Type=json'; // 여기에 실제 API URL을 넣으십시오
// try {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $api_url);
//     // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//     $data = curl_exec($ch);
//     curl_close($ch);
// } 
// catch (Exception $e) {
//     echo $e->getMessage();
// }
// // var_dump($data);
// // header('Content-Type: application/json');
// echo $data;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,3);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);

$response = curl_exec($ch);
$json = json_decode($response, true);
curl_close($ch);

var_dump($response);
//var_dump($json["TBGGSTATNELVM"][1]["row"]);
?> 

<?php 
foreach($json["TBGGSTATNELVM"][1]["row"] as $value)
{
    echo "역이름 : ".$value["STATN_NM"].", 승강기 위치 : ".$value["LOC"];
?>
<br>
<?php
}
?>

