<?php

namespace App;

trait RecordActivity
{
    public static function bootRecordActivity()
    {
        foreach (static::getModelEvents() as $event) {
            static::$event(function($model){
                $model->recordActivity();
            });
        }
    }

    public function recordActivity()
    {
        Activity::create([
            'user_id' => \Auth::id(),
            'conversation_id' => $this->id,
            'conversation_type' => get_class($this),
        ]);
    }

    public static function getModelEvents()
    {
        if(isset(static::$recordEvents)){
            return static::$recordEvents;
        }
        return ['created'];
    }
}