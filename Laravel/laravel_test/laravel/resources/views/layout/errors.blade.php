@if($errors->any())
    @foreach($errors->all() as $error)
        <div stlye="color:red">{{$error}}</div>
    @endforeach

@endif