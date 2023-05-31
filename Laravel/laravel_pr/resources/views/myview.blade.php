<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myviewtest</title>
</head>
<body>

    <h1>test Min</h1>
    <br>
    {{-- <p>{{$name}}</p> --}}
    <br>
    <br>
    <a href="{{route('만들다.create')}}">creat부분</a>

    <form action="/method" method = "get">
        @csrf
        <button type = "submit">GET</button>
    </form>
    <br>

    <form action="/method" method ="post">
        @csrf
        <button type = "submit">POST</button>
    </form>
    <br>

    <form action="/method" method ="post">
        @csrf
        @method('put')
        <button type="submit">PUT</button>
    </form>

</body>
</html>