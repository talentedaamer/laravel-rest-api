<?php

namespace App\Http\Resources\Comment;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'author' => $this->author,
            'comment' => $this->comment,
            'vote' => $this->vote,
            'links' => [
                'post' => route( 'posts.show', $this->post_id ),
                // 'comment' => route( 'comments.show', [ $this->post_id, $this->id ] )
            ]
        ];
    }
}
