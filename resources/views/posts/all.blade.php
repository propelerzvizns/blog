@extends('layouts.main')
@section('title', 'Posts')


@section('content')
<a href="create">create post</a>
    @foreach ($posts as $post)
        <div>
            
        <h3><a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a></h3>
      
        </div>
    @endforeach
@endsection
</html>