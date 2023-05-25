<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home!!</h1>
    <br>
    <br>
    <br>
    <!-- @csrf를 작성함으로써 공격에 대한 방어요소가 된다. 보통은 모든 서비스안에 $_SESSION방식으로 들어가야 된다. -->
    <form action="/method" method ="post">
        @csrf
        <button type = "submit">POST</button>
    </form>
    <form action="/method" method ="post">
    @csrf
    @method('PUT')
        <button type = "submit">PUT</button>
    </form>
    <br>
    <form action="/method" method ="post">
    @csrf
    @method('Delete')
        <button type = "submit">DELETE</button>
    </form>
</body>
</html>