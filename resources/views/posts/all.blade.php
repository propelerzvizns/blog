@extends('layouts.main')
@section('title', 'Posts')


@section('content')
<h1>My posts</h1>
<a href="{{route('createPostForm')}}">create post</a>
    @foreach ($posts as $post)
        <div>
            
        <h3><a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a> comments({{$post->comments->count()}})</h3>
        
      
        </div>
    @endforeach
@endsection
</html>