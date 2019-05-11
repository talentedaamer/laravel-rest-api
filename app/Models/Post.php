<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    
    protected $fillable = [
        'title', 'content'
    ];
    
    /**
     * return slugable conf array for the model
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
