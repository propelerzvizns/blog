<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Comment;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =Post::where('is_published', 1)->with('comments')->get();
        return view('posts.all', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //
        $data = $request->validate();

        // $newPost = new Post;
        // $newPost->title = $data['title'];
        // $newPost->body = $data['body'];
        // $newPost->is_published = $request->get('is_published', false);

        // $newPost->save();
        Post::create($data);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        // $comments = Comment::where('post_id' , $id)->get();
        $comments = $post->comments;
        // info('got comments');

    
        $title = $post->title;
        $body = $post->body;
        // info(compact('title', 'body', 'comments'));
        return view('posts.single', [
            'title' => $title,
            'body' => $body,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
