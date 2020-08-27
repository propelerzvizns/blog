<html>
    <head>
        <title>Posts</title>
    </head>
    <body>
        
    @foreach ($posts as $post)
        <div>
        <h3><a href="{{route('singlePost', ['id' => $post->id])}}">{{$post->title}}</a></h3>
      
        </div>
    @endforeach
    
    </body>
</html>