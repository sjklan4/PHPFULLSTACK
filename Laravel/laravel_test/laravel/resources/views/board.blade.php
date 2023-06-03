@extends('layout.layout')

@section('title','Login')

@section('contents')
    @include('layout.errors')
    @forelse($data as $item)
        <p>{{$item->title}} : {{$item->write_user_id}}</p>
        <br>
    @empty
        <p>자료 없음</p>
    @endforelse
    <button onclick="location.href='{{route('board.write')}}'">작성</button>
    <br>
    <a href="{{route('board.write')}}">입력</a>
@endsection
