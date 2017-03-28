<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use RecordActivity;

    /**
     * @var array
     */
    protected $fillable = ['body'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable(){
        return $this->morphTo();
    }
}
