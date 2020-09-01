@extends('layouts.main')
@section('title', $title)
@section('content')
    <h1>{{$title}}</h1>
    <p>{{$body}}</p>
    <h1>Posts comments</h1>
    @foreach($comments as $comment)
    <div class="alert alert-success">{{$comment->body}}</div>
    
        
    @endforeach

<form method="POST" action="/posts/{{$id}}/comments">
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
@endsection