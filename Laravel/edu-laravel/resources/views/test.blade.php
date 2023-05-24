<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Test여긴 뷰이다!!!!!.index</h1>
    <h5>{{$name}}</h5>
    <hr>
    <br>
    <a href="{{route('tasks.index')}}">Tasks.index</a>
    <br>
    {{-- 아래 []안에 있는 것들의 활용 방안은 = 각각의 번호나 이름을 주어서 수정 또는 변경하고자 하는 부분을 지정해서 사용 할 수 있다. --}}
    <a href="{{route('tasks.show', ['task' => 13])}}">Tasks.show</a>
    <form action="{{route('tasks.update', ['task' => 1])}}" method = "post">
        @csrf
        {{-- 아래 method를 정해주는 이유는 전달 가능 방법이 put으로 정해 져 있기 때문에 직접 지정해 준다. --}}
        @method('put') 
        <input type="hidden" name="id" value = "php506">
        <input type="hidden" name="pw" value = "506">
        <input type="hidden" name="name" value = "admin">
        <button type = "submit">Tasks.update</button>
    </form>
    <br>
    <hr>
    <br>
    {{-- 해당하는 키의 값을 가져오도록 설정 지금은 키명은 task 값은 999 --}}
    <a href="{{route('tasks.edit', ['task' => 999])}}">Tasks.edit</a> 
    <br>
    <hr>
    <form action="{{route('tasks.store')}}" method="post">
    @csrf
    ID : <input type="text" name="id">
    PASS : <input type="password" name="pw">
    <button type ="submit">STORE</button>
    </form>
     



</body>
</html>
