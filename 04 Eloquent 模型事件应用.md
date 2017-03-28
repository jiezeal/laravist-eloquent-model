#Eloquent 模型事件应用

利用Eloquent Model的多态关联还有它的事件去完成一个记录用户活动的功能
参照：[https://www.laravist.com/user/daryl](https://www.laravist.com/user/daryl)  

php artisan make:model Activity -m

2017_03_28_065132_create_activities_table.php
```
public function up()
{
    Schema::create('activities', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->integer('conversation_id');
        $table->string('conversation_type');
        $table->timestamps();
    });
}
```

php artisan migrate

Activity.php
```
/**
 * @return \Illuminate\Database\Eloquent\Relations\MorphTo
 */
public function conversation(){
    return $this->morphTo();
}

/**
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function user(){
    return $this->belongsTo(User::class);
}
```

