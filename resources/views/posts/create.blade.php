@extends('layouts.main')
@section('title', 'create posts')


@section('content')
<h1>Create post</h1>
<form method="POST" action="/posts">
    @csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
    @endif
    
        <div class="form-group">
          <label for="title">Title</label>
          <input class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" rows="3" name="body"></textarea>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value='1'>
            <label class="form-check-label" for="is_published">I want to publish this post</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection