@extends('layout.layout')

@section('title','Login')

@section('contents')
    @include('layout.errors')
    <form action="{{route('board.store')}}" method="post">
        @csrf
        <label for="title">title : </label>
        <input type="text" name="title" id="title">
        <br>
        <label for="content">content : </label>
        <input type="text" name="content" id="content">
        <br>
        <label for="content">content : </label>
        <input type="text" name="content" id="content">
        <button type="submit">작성</button>
    </form>

@endsection
