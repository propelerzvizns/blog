@extends('layouts.main')
@section('title', $user->name . ' Profile page')
@section('content')
   {{-- <h1>{{$post-title}}</h1>
    <p>{{$body}}</p> --}}
    


    <h1>{{$user->name}}</h1>
    <h4>Post</h4> 

    @foreach ($user->posts as $post)

      <a href="/singlePost, ['id', $post->id]">{{$post->title}}</a>
        {{$post->body}}
      <form method="POST" action="/posts/{{$post->id}}/comments">
        @csrf
    
        
        <div class="form-group">
          <label for="comment">comment</label>
          <input class="form-control @error('comment') is-invalid @enderror" id="comment" name="comment">
            @error('comment')
        <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


      <h1>Posts comments</h1>

      @foreach($post->comments as $comment)

      < div class="alert alert-success">{{$comment->body}}</div>
      
          
      @endforeach 
          
    @endforeach


@endsection