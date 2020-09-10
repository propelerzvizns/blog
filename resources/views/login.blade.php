@extends('layouts.main')
@section('title', 'login')


@section('content')
<h1>login</h1>
<div class="alert alert-secondary">
    <form method="POST" action="/login">
        @csrf
    
    
     
    
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror " id="password" rows="3" name="password"></textarea>
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            @if($loginFailed ?? false)
                <div class="alert alert-danger">wrong usename or password</div>
            @endif
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
</div>
@endsection