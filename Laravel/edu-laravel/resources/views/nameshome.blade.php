<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Names index</title>
</head>
<body>
    <a href="/names">names</a>
    <br>
    <br>
    <a href="{{url('/names');}}">names</a>
    <!-- 결과는 같으나 표현 방식이 각각 틀린 형태 :  가장 추천하는 방식은 3번째 why?:관리가 용이 3번째는 wep에서 지정한 별칭으로 찾아 가기 때문에 주소가 바뀌어도 값은 정상적으로 찾아간다.  -->
    <br>
    <br>
    <a href="{{route('names.index');}}">names</a> {{--라라벨 에서 추천하는 방식--}}
</body>
</html>