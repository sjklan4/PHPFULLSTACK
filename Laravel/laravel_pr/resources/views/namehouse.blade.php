<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/name">name</a>
    <br>
    <a href="{{url('/name')}}">name : url로 받아오는 방식</a>
    <br>
    <a href="{{route('name.index');}}">route로받아오는 방식</a>
</body>
</html>