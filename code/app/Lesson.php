<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
/**
 * @return \Illuminate\Database\Eloquent\Relations\MorphMany
 */
public function comments(){
    return $this->morphMany(Comment::class, 'commentable');
}
}
