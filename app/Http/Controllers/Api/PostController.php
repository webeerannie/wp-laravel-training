<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::query()->with('comments')->paginate(10);
        // select * from comments where post_id in (select id from posts) --- IGNORE ---
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = Post::query()->create($request->get('post'));
        $comments = new Comment(['post_id' => $post->id, 'content' => 'testing again']);
        return $post->comments()->saveMany([$comments]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return $post->load('comments');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return tap($post)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return $post->delete();
    }
}
