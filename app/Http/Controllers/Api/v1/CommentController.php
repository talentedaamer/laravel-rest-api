<?php

namespace App\Http\Controllers\Api\v1;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\Comment\CommentResource;
use App\Http\Resources\Comment\CommentCollection;
use Symfony\Component\HttpFoundation\Response;

class CommentController extends Controller
{
    /**
     * Display a listing of the comments for post.
     * @param Post $post
     *
     * @return CommentCollection
     */
    public function index(Post $post)
    {
        return new CommentCollection($post->comments);
    }
    
    /**
     * Store a newly created resource in storage.
     * @param CommentRequest $request
     * @param Post $post
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function store(CommentRequest $request, Post $post)
    {
        $comment = new Comment( $request->all() );
        $post->comments()->save( $comment );
        return response([
            'data' => new CommentResource($comment)
        ], Response::HTTP_CREATED);
    }
    
    /**
     * display specific post comment
     * @param Post $post
     * @param Comment $comment
     *
     * @return CommentResource
     */
    public function show(Post $post, Comment $comment)
    {
        return new CommentResource($post->comments()->find($comment->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post, Comment $comment)
    {
        $comment->update( $request->all() );
        return response([
            'data' => new CommentResource($comment)
        ], Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
