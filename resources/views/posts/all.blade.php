@extends('layouts.main')
@section('title', 'Posts')


@section('content')
<h1>My posts</h1>
<a href="{{route('createPostForm')}}">create post</a>
    @foreach ($posts as $post)
        <div>
            
       {{$post->id}} <a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a> comments({{$post->comments->count()}})
        <a href="/users/{{$post->user->id}}">
         {{$post->user->name}}
    </a>
        
      
        </div>
    @endforeach
    {{$posts->links()}}
@endsection
</html>