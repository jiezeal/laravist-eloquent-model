<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use RecordActivity;

    /**
     * @var array
     */
    protected $fillable = ['title', 'body', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }
}
