<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'author', 'comment', 'vote'
    ];
    
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
