@extends('layouts.main')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <p>{{$body}}</p>
    <ul>
    @foreach ($comments as $comment)
    <li>{{$comment->body}}</li>
        
    @endforeach
</ul>
@endsection