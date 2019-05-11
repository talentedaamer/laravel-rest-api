<?php

namespace App\Http\Resources\Post;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'user' => $this->user_id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'vote_up' => $this->comments->count() ? $this->comments->sum('vote') : 'No Votes Yet',
            'vote_down' => $this->comments->count() ? $this->comments->count() - $this->comments->sum('vote') : 'No Votes Yet',
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'links' => [
                'comments' => route('comments.index', $this->id )
            ]
        ];
    }
}
